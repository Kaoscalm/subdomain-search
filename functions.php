<?php
/**
* Search availability subdomain name Script -
*
* PHP version 7.3
*
* @category   Search functions | PHP Script
* @package    v.1.2
* @author     Alessandro Rinaldi <info@scriptnet.net>
* @copyright  Creative Commons Attribution 4.0 | 2014-2021 ® ScriptNet.net
* @link       https://scriptnet.net
* @license    https://www.php.net/license/3_01.txt  PHP License 3.01
* @version    SVN: $Id$
*/

         function HTTP_Get($GET)
           
        {

        	if( strpos($GET, 'http') ) $GET = 'http://'.$GET;

             $ch = curl_init( $GET );
     
                $options = array(
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_SSL_VERIFYPEER => false,
                  CURLOPT_BINARYTRANSFER=> true
                );

                  curl_setopt_array( $ch, $options );
     
                  $result =  curl_exec($ch);

                    return $result;

        }

		function strposa($haystack, $needle, $offset=0) {
		    if(!is_array($needle)) $needle = array($needle);
		    foreach($needle as $query) {
		        if(strpos($haystack, $query, $offset) !== false) return true; // stop on first true result
		    }
		    return false;
		}

        function check_default( $url ) {
        		$content = strip_tags(HTTP_Get($url));
				$array  = array('Web Server\'s Default Page', 'melon', 'cheese', 'milk');

        		if ( strposa($content, $array) )
        			return false;

        		return true;
        }

        if( isset($_POST['submit']) AND isset($_POST['sub']) AND !empty($_POST['sub']) AND isset($_POST['domain']) AND !empty($_POST['domain'])) {

		    $blocked  = array("api", "door", "porn", "sex", "builder", "cpanel", "file-manager", "ftp", "mx1", "ns1", "ns2", "ns3", "ns4", "phpmyadmin", "server1", "server2", "server3", "server4", "server5", "server6", "server7", "server8", "server9", "server10", "server11", "server12", "server13", "server14", "server15", "sql1", "sql2", "sql3", "sql4", "sql5", "sql6", "sql7", "sql8", "sql9", "webmail", "webmail1", "www");
		    $sub      =  $_POST["sub"];
		    $domain   = $_POST["domain"];
		    $hostname = $sub.$domain;

		        if(!preg_match("/^[a-z][a-z\-\.]+[a-z]$/i", $sub)){
		            $status = "<font color='red'>Nome invalido: " . $hostname . "</font>";
		        }
		        else {
		            if (in_array($sub, $blocked)) {
		        	    $status = "<a href='https://$hostname'>" . $hostname . "</a> è un <font color='red'>Protected Subdomain</font>";
		            }
		            else if (checkdnsrr($hostname.'.', 'ANY')){
		            	if( check_default($hostname) )
		              		  $status = "<a href='https://$hostname'>" . $hostname . "</a> è <font color='red'>Not Available</font>";
		               	else  $status = $hostname . " è <font color='green'>Available! </font><a href=' '>Take it!</a>";
		            }
		            else {
		                $status = $hostname . " è <font color='green'>Available! </font><a href=' '>Take it!</a>";
		            }
		        }

        }

?>