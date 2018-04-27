<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Controller yang extend dari ci_controller
 *
 * @package   Ditmet
 * @author    VF <verafirmansyah@gmail.com>
 * @copyright Copyright (c) 2017.
 * @since     1.0
 *
 * INDEMNITY
 * You agree to indemnify and hold harmless the authors of the Software and
 * any contributors for any direct, indirect, incidental, or consequential
 * third-party claims, actions or suits, as well as any related expenses,
 * liabilities, damages, settlements or fees arising from your use or misuse
 * of the Software, or a violation of any terms of this license.
 *
 * DISCLAIMER OF WARRANTY
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESSED OR
 * IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF QUALITY, PERFORMANCE,
 * NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE.
 *
 * LIMITATIONS OF LIABILITY
 * YOU ASSUME ALL RISK ASSOCIATED WITH THE INSTALLATION AND USE OF THE SOFTWARE.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS OF THE SOFTWARE BE LIABLE
 * FOR CLAIMS, DAMAGES OR OTHER LIABILITY ARISING FROM, OUT OF, OR IN CONNECTION
 * WITH THE SOFTWARE. LICENSE HOLDERS ARE SOLELY RESPONSIBLE FOR DETERMINING THE
 * APPROPRIATENESS OF USE AND ASSUME ALL RISKS ASSOCIATED WITH ITS USE, INCLUDING
 * BUT NOT LIMITED TO THE RISKS OF PROGRAM ERRORS, DAMAGE TO EQUIPMENT, LOSS OF
 * DATA OR SOFTWARE PROGRAMS, OR UNAVAILABILITY OR INTERRUPTION OF OPERATIONS.
 */

class MY_Controller extends CI_Controller
{
    public $default_timezone = "Asia/Jakarta";

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set($this->default_timezone);

        // # load saja semua model
        $this->load->model(array('auth/auth_m'));

        // load database
        $this->load->database();

    }

    /**
     * cek token
     * @return boolean
     */

    public function token_is_validate() {

        if (get_cookie("token") !== NULL) {

            // echo "0";

            $decodedToken = AUTHORIZATION::validateToken(get_cookie("token"));

            if (!empty($decodedToken)) {
                
                // echo "8";

                // echo $decodedToken->user_email;
                $query = $this->auth_m->select_all_user_where($decodedToken->user_email);
                // cek tokennya ada atau tidak di database
                // untuk kill user tinggal hapus token dari field user
                // echo $query->user_email; 
                if ($query->token != '') {

                    // echo "1";
                    // cek expire token dan remember
                    if (time() <= $decodedToken->exp && $decodedToken->remember == 'no') {

                        // echo "2";
                        return true;

                    // jika remember 
                    } elseif ($decodedToken->remember == 'yes') {
                        
                        // echo "3";
                        return true;

                    } else {

                        // echo "4";
                        $data['token'] = '';
                        $this->auth_m->update_users($decodedToken->user_email, $data);
                        delete_cookie('token');
                        redirect(base_url().'auth');

                    }

                } else {

                    // echo "5";
                    delete_cookie('token');
                    redirect(base_url().'auth');

                }

            } else {

                // echo "6";
                redirect(base_url().'auth');

            }

        } else {

            // echo "7";
            redirect(base_url().'auth');

        }

    }

    // khusus redirect ke halaman dashboard kalo masih ada tokennya dan tidak di kick
    public function token_auth_redirect() {

        $decodedToken = AUTHORIZATION::validateToken(get_cookie("token"));

        if (!empty($decodedToken)) {
            // echo "yes";
            // echo $decodedToken->user_email;
            $query = $this->auth_m->select_user_auth_redirect($decodedToken->user_email);
            if ($query > 0) {
    
                redirect(base_url().'home');;

            }
        }
    }

    public function token_data() {

        if ($this->token_is_validate()) {

            $decodedToken = AUTHORIZATION::validateToken(get_cookie("token"));
            
            return json_encode($decodedToken);
        }
    }

}
