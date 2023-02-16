<?php
class Session {

	public static function userConnected() {
		$bool = isset($_SESSION["id_utilisateur"]);
		return $bool;
	}

	public static function adminConnected() {
		$bool = isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == 1;
		return $bool;
	}

	public static function userConnecting() {
		$bool = isset($_GET["action"]) && $_GET["action"] == "connecterUtilisateur";
		return $bool;
	}

	public static function urlMenu() {
		$urlMenu = Session::adminConnected() ? "vue/header/headerAdmin.html" : "vue/header/headerMonCompte.html";
		return $urlMenu;
	}

}
?>
