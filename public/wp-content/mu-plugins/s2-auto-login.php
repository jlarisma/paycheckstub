<?php
add_action('ws_plugin__s2member_during_configure_user_registration', 's2_auto_login_after_registration');
  function s2_auto_login_after_registration($vars = array())
     {
          if(is_admin()) return; // Not when an Admin is creating accounts.

          wp_set_auth_cookie($vars['user_id'], FALSE, FALSE); // Log the user in.

          remove_all_filters('login_redirect'); // BuddyPress compatibility.

          if(did_action('login_form_register')) // For `/wp-login.php?action=register` compatibility.
              c_ws_plugin__s2member_login_redirects::login_redirect($vars['login'], $vars['user']);

          $GLOBALS['_s2_auto_login_after_registration_vars'] = $vars; // For Pro Form compatibility.
          add_action('template_redirect', '_s2_auto_login_after_registration', 1);
      }
  function _s2_auto_login_after_registration() // Pro Form redirection handler.
      {
          $vars = $GLOBALS['_s2_auto_login_after_registration_vars'];
          c_ws_plugin__s2member_login_redirects::login_redirect($vars['login'], $vars['user']);
      }
