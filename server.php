<?php

// The filename of the currently executing script, relative to the document root.
echo $_SERVER['PHP_SELF'];

// Array of arguments passed to this script
echo $_SERVER['argv'];

// Contains the number of command line parameters passed to the script
echo $_SERVER['argc'];

// What revision of the CGI specification the server is using
echo $_SERVER['GATEWAY_INTERFACE'];

// The IP address of the server under which the current script is executing
echo $_SERVER['SERVER_ADDR'];

// The name of the server host under which the current script is executing
echo $_SERVER['SERVER_NAME'];

// Server identification string, given in the headers when responding to requests
echo $_SERVER['SERVER_SOFTWARE'];

// Name and revision of the information protocol via which the page was requested
echo $_SERVER['SERVER_PROTOCOL'];

// Which request method was used to access the page
echo $_SERVER['REQUEST_METHOD'];

// The timestamp of the start of the request
echo $_SERVER['REQUEST_TIME'];

// The timestamp of the start of the request, with microsecond precision
echo $_SERVER['REQUEST_TIME_FLOAT'];

// The query string, if any, via which the page was accessed
echo $_SERVER['QUERY_STRING'];

// The document root directory under which the current script is executing, as defined in the server's configuration file
echo $_SERVER['DOCUMENT_ROOT'];

// Contents of the ACCEPT: header from the current request, if there is one
echo $_SERVER['HTTP_ACCEPT'];

// Contents of the ACCEPT_CHARSET: header from the current request, if there is one
echo $_SERVER['HTTP_ACCEPT_CHARSET'];

// Contents of the ACCEPT_ENCODING: header from the current request, if there is one
echo $_SERVER['HTTP_ACCEPT_ENCODING'];

// Contents of the ACCEPT_LANGUAGE: header from the current request, if there is one
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];

// Contents of the CONNECTION: header from the current request, if there is one
echo $_SERVER['HTTP_CONNECTION'];

// Contents of the HOST: header from the current request, if there is one
echo $_SERVER['HTTP_HOST'];

// The address of the page (if any) which referred the user agent to the current page.
echo $_SERVER['HTTP_REFERER'];

// Contents of the USER-AGENT: header from the current request, if there is one
echo $_SERVER['HTTP_USER_AGENT'];

// Set to a non-empty value if the script was queried through the HTTPS protocol
echo $_SERVER['HTTPS'];

// The IP address from which the user is viewing the current page
echo $_SERVER['REMOTE_ADDR'];

// The host name from which the user is viewing the current page
echo $_SERVER['REMOTE_HOST'];

// The port being used on the user's machine to communitcate with the web server
echo $_SERVER['REMOTE_PORT'];

// The authenticated user
echo $_SERVER['REMOTE_USER'];

// The authenticated user if the request is internally redirected
echo $_SERVER['REDIRECT_REMOTE_USER'];

// The absolute pathname of the currently executing script
echo $_SERVER['SCRIPT_FILENAME'];

// The value given to the SERVER_ADMIN (for Apache) directive in the web server configuration file
echo $_SERVER['SERVER_ADMIN'];

// The port on the server machine being used by the web server for communication
echo $_SERVER['SERVER_PORT'];

// String containing the server version and virtual host name which are added to server-generated pages, if enabled
echo $_SERVER['SERVER_SIGNATURE'];

// Filesystem- (not document root-) based path to the current script, after the server hase done any virtual-to-real mapping
echo $_SERVER['PATH_TRANSLATED'];

// Contains the current script's path
echo $_SERVER['SCRIPT_NAME'];

// The URI which was given in order to access this page
echo $_SERVER['REQUEST_URI'];

// When doing Digest HTTP authentication this variable is set to the AUTHORIZATION header sent by the client
echo $_SERVER['PHP_AUTH_DIGEST'];

// When doing HTTP authentication this variable is set to the username provided by the user
echo $_SERVER['PHP_AUTH_USER'];

// When doing HTTP authentication this variable is set to the password provided by the user
echo $_SERVER['PHP_AUTH_PW'];

// When doing HTTP authentication this variable is set to the authentication type
echo $_SERVER['AUTH_TYPE'];

// Contains any client-provided pathname information trailing the actual script filename but precedeing the query string, if available
echo $_SERVER['PATH_INFO'];

// Original version of PATH_INFO before processed by PHP
echo $_SERVER['ORIG_PATH_INFO'];
