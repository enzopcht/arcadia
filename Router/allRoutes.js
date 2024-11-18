import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.php"),
    new Route("/services", "Nos services", "/pages/services.php"),];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Arcadia";