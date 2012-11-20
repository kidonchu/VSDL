<?php
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * login
     *
     * @param string $username
     *      username
     * @param string $password
     *      password
     * @return boolean
     *      true if login is successful, false otherwise
     */
    public function login($username, $password)
    {
        // user validation
	if (!$this->checkDB($username, $password))
	    return false;

	$this->session->set_userdata(array($this->getLoginSessionVar()=> $username));
	return true;
        
    }

    /**
     * checkLogin
     *
     * @return
     *      true if user is already logged in, false otherwise
     */
    public function checkLogin()
    {
	$sessionvar = $this->GetLoginSessionVar();
	if (!$this->session->userdata($sessionvar))
            return false;
	return true;
    }

    /**
     * logout
     *
     * Clears the session variable specific to the current user
     */
    public function logout()
    {
        // Explicitly unset all session varaibles (should be combined after release)
	$sessionvar = $this->GetLoginSessionVar();
	$this->session->unset_userdata($sessionvar);
    }

    /**
     * CheckLoginInDB
     *
     * Checks if user with given information exists in the dataabse. This will also
     * store flag information for each utility and accessiable database,
     * which gets used to control user access for each utility and database.
     *
     * @param string $strUsername
     *      username
     * @param string $strPassword
     *      password
     * @return
     *      true if user exists in database, false otherwise
     */
    private function checkDB($username, $password)
    {
        // Check database for username/password combo
        $this->db->where(array('strUsername'=>$username, 'strPassword'=>$password));
        $query = $this->db->get('tblLogin');

        // return false if no matching username and password comb exists
	if ($query->num_rows() <= 0)
        {
            $this->session->set_userdata('err', "Incorrect username or password. Please try again.");
            return false;
        }
        return true;
    }

    /**
     * GetLoginSessionVar
     *
     * Gets the user-specific session variable string. This will be used to
     * to identify user logins
     *
     * @return string
     *      user identification string
     */
    private function GetLoginSessionVar()
    {
	$retvar = md5("4S5Hft9RBsQ0yftvry5Ed8wEnsDk3e2A");
	$retvar = 'usr_' . substr($retvar, 0, 10);
	return $retvar;
    }
}