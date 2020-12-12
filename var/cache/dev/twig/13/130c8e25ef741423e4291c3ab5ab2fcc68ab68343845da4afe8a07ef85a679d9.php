<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_087902d7e518edfd96f951fd9fa7b96d3c9532ea3c97ae559df4ce20e7125279 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'titre' => [$this, 'block_titre'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "
    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
          rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 22
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 24
        echo "</head>

<body id=\"page-top\">
<!-- Page Wrapper -->
<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("first");
        echo "\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"fas fa-laugh-wink\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\">CentralComm</div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("first");
        echo "\">
                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                <span>Acceuil</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fas fa-fw fa-book\"></i>

                <span>Cours</span>
            </a>

            <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Liste des cours :</h6>
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "filiere", [], "any", false, false, false, 66), "cours", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 67
            echo "                        <a class=\"collapse-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours.detail", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "nom", [], "any", false, false, false, 67), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </div>
            </div>
        </li>
";
        // line 73
        echo "
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_fichier");
        echo "\" aria-expanded=\"true\">
                <i class=\"fas fa-fw fa-plus-square\"></i>
                <span>Ajouter un Fichier</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\"
               aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Pages</span>
            </a>
            <div id=\"collapsePages\" class=\"collapse show\" aria-labelledby=\"headingPages\"
                 data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Users Ops:</h6>
                    ";
        // line 103
        echo "                    <a class=\"dropdown-item\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103)]), "html", null, true);
        echo "\">
                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                        Profil
                    </a>
                    <a class=\"collapse-item\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> <i class=\"fa fa-sign-out-alt\" aria-hidden=\"true\"></i> Logout</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>


                <!-- Topbar Search -->
                <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                               aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"button\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class=\"nav-item dropdown no-arrow d-sm-none\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                             aria-labelledby=\"searchDropdown\">
                            <form class=\"form-inline mr-auto w-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                           placeholder=\"Search for...\" aria-label=\"Search\"
                                           aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "user", [], "any", false, false, false, 183), "userID", [], "any", false, false, false, 183), "html", null, true);
        echo "</span>
                            <img class=\"img-profile rounded-circle\"
                                 src=\"/uploads/imageProfile/";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185), "image", [], "any", false, false, false, 185), "html", null, true);
        echo "\">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190), "id", [], "any", false, false, false, 190)]), "html", null, true);
        echo "\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Settings
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Activity Log
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <h1 class=\"h3 mb-4 text-gray-800\">
                    ";
        // line 220
        $this->displayBlock('titre', $context, $blocks);
        // line 223
        echo "                </h1>
                ";
        // line 224
        $this->displayBlock('body', $context, $blocks);
        // line 226
        echo "
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class=\"sticky-footer bg-white\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright &copy; CentraleComm 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"";
        // line 268
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a>
            </div>
        </div>
    </div>
</div>


<script src=\"vendor/jquery/jquery.min.js\"></script>
<script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

<!-- Core plugin JavaScript-->
<script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

<!-- Custom scripts for all pages-->
<script src=\"js/sb-admin-2.min.js\"></script>
";
        // line 283
        $this->displayBlock('javascript', $context, $blocks);
        // line 285
        echo "
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "        <title>CentralComm</title>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 23
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 220
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 221
        echo "                        Acceuil
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 224
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 225
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 283
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 283,  473 => 225,  463 => 224,  452 => 221,  442 => 220,  432 => 23,  422 => 22,  411 => 12,  401 => 11,  387 => 285,  385 => 283,  367 => 268,  323 => 226,  321 => 224,  318 => 223,  316 => 220,  283 => 190,  275 => 185,  270 => 183,  191 => 107,  183 => 103,  155 => 76,  150 => 73,  145 => 69,  134 => 67,  130 => 66,  107 => 46,  92 => 34,  80 => 24,  78 => 22,  74 => 21,  66 => 16,  62 => 14,  60 => 11,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    {% block title %}
        <title>CentralComm</title>
    {% endblock %}

    <!-- Custom fonts for this template-->
    <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
          rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    {% block stylesheet %}
    {% endblock %}
</head>

<body id=\"page-top\">
<!-- Page Wrapper -->
<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{ path('first') }}\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"fas fa-laugh-wink\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\">CentralComm</div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('first') }}\">
                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                <span>Acceuil</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fas fa-fw fa-book\"></i>

                <span>Cours</span>
            </a>

            <div id=\"collapseTwo\" class=\"collapse show\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Liste des cours :</h6>
                    {% for cour in app.user.filiere.cours %}
                        <a class=\"collapse-item\" href=\"{{ path('cours.detail',{id : cour.id}) }}\">{{ cour.nom }}</a>
                    {% endfor %}
                </div>
            </div>
        </li>
{#        {{ dump(app.user.filiere.filiereCours.cours) }}#}

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('ajouter_fichier') }}\" aria-expanded=\"true\">
                <i class=\"fas fa-fw fa-plus-square\"></i>
                <span>Ajouter un Fichier</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\"
               aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Pages</span>
            </a>
            <div id=\"collapsePages\" class=\"collapse show\" aria-labelledby=\"headingPages\"
                 data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Users Ops:</h6>
                    {#                        <a class=\"collapse-item\" href=\"{{ path('app_login') }}\">Login</a>#}
{#                    <a class=\"collapse-item\" href=\"{{ path('app_register') }}\"> <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> Register</a>#}
                    <a class=\"dropdown-item\" href=\"{{ path('user', {id: app.user.id}) }}\">
                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                        Profil
                    </a>
                    <a class=\"collapse-item\" href=\"{{ path('app_logout') }}\"> <i class=\"fa fa-sign-out-alt\" aria-hidden=\"true\"></i> Logout</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>


                <!-- Topbar Search -->
                <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                               aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"button\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class=\"nav-item dropdown no-arrow d-sm-none\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                             aria-labelledby=\"searchDropdown\">
                            <form class=\"form-inline mr-auto w-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                           placeholder=\"Search for...\" aria-label=\"Search\"
                                           aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.userID }}</span>
                            <img class=\"img-profile rounded-circle\"
                                 src=\"/uploads/imageProfile/{{ app.user.image }}\">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                             aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"{{ path('user', {id: app.user.id}) }}\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Settings
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Activity Log
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <h1 class=\"h3 mb-4 text-gray-800\">
                    {% block titre %}
                        Acceuil
                    {% endblock %}
                </h1>
                {% block body %}
                {% endblock %}

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class=\"sticky-footer bg-white\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright &copy; CentraleComm 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        </div>
    </div>
</div>


<script src=\"vendor/jquery/jquery.min.js\"></script>
<script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

<!-- Core plugin JavaScript-->
<script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

<!-- Custom scripts for all pages-->
<script src=\"js/sb-admin-2.min.js\"></script>
{% block javascript %}
{% endblock %}

</body>

</html>
", "base.html.twig", "C:\\Users\\patdo\\PhpstormProjects\\Final\\templates\\base.html.twig");
    }
}
