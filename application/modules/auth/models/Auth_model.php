<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    private $ldap_config;
    
    public function __construct()
	{
        parent::__construct();
        $this->config->load('ldap_config');
        $this->ldap_config = $this->config->item('ldap_config');
    }

    public function loginWhithAD($username,$password){
        $ldap_dn = $this->ldap_config['dominio']."\\".$username;
        $ldap_password = $password;
        
        $ldap_con = ldap_connect($this->ldap_config['adserver']);
        
        ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
        $bind = @ldap_bind($ldap_con, $ldap_dn, $ldap_password);
        @ldap_close($ldap_con);
        return $bind;
    }

    public function getUserInfo($username){
        $ldap_dn = $this->ldap_config['dominio']."\\".$this->ldap_config['usuario'];
        $ldap_password = $this->ldap_config['password'];
        
        $ldap_con = ldap_connect($this->ldap_config['adserver']);
        
        ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
        $bind = ldap_bind($ldap_con, $ldap_dn, $ldap_password);
        if ($bind) {
            $filter="(sAMAccountName=".$username.")";
            $result = ldap_search($ldap_con,$this->ldap_config['base_dn'],$filter,array("wwwhomepage","givenname","sn","mail","memberof"));
            $info = ldap_get_entries($ldap_con, $result);
            @ldap_close($ldap_con);
            return $info;
        }
    }
}