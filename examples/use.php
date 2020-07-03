require_once "../src/class.sessionmanager.php";

// single session create
SessionManager::createSession(["user_id"=> "3"]);
// prual session create
sessionManager::createSession(["user_id"=> "1","user_namesurname" => "Taha KOÇAK", "username" => "tahakoçak"]);

// Key Session Check
SessionManager::checkSession("user_id");

// key value session check
SessionManager::checkSession("username","tahakocak");

// single session delete
SessionManager::deleteSession("username");

// all session delete
SessionManager::alldeletesession();
