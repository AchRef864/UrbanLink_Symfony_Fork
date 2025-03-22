<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_fe6a33cf2ea68e993d136ecf41ee8298 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-icon.png"), "html", null, true);
        yield "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" />
    <title>Argon Dashboard 2 Tailwind by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <!-- Nucleo Icons -->
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-svg.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <!-- Popper -->
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>
    <!-- Main Styling -->
    <link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/argon-dashboard-tailwind.css?v=1.0.1"), "html", null, true);
        yield "\" rel=\"stylesheet\" />



        ";
        // line 23
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 25
        yield "


    <script src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/chartjs.min.js"), "html", null, true);
        yield "\" async></script>
    <!-- plugin for scrollbar  -->
    <script src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        yield "\" async></script>
    <!-- main script file  -->
    <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard-tailwind.js?v=1.0.1"), "html", null, true);
        yield "\" async></script>
        ";
        // line 33
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 35
        yield "    </head>
    <body>

        <aside class=\"fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0\" aria-expanded=\"false\">
      <div class=\"h-19\">
        <i class=\"absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden\" sidenav-close></i>
        <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700\" href=\"https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html\" target=\"_blank\">
          <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct-dark.png"), "html", null, true);
        yield "\" class=\"inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8\" alt=\"main_logo\" />
          <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct.png"), "html", null, true);
        yield "\" class=\"hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8\" alt=\"main_logo\" />
          <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">Argon Dashboard 2</span>
        </a>
      </div>

      <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />

      <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
        <ul class=\"flex flex-col pl-0 mb-0\">
          <li class=\"mt-0.5 w-full\">
            <a class=\"py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/dashboard.html"), "html", null, true);
        yield "\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Dashboard</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/tables.html"), "html", null, true);
        yield "\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Tables</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/billing.html"), "html", null, true);
        yield "\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Billing</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/virtual-reality.html"), "html", null, true);
        yield "\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-cyan-500 ni ni-app\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Virtual Reality</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/rtl.html"), "html", null, true);
        yield "\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-red-600 ni ni-world-2\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">RTL</span>
            </a>
          </li>

          <li class=\"w-full mt-4\">
            <h6 class=\"pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60\">Account pages</h6>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/profile.html"), "html", null, true);
        yield "\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Profile</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/sign-in.html"), "html", null, true);
        yield "\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-orange-500 ni ni-single-copy-04\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Sign In</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/sign-up.html"), "html", null, true);
        yield "\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-cyan-500 ni ni-collection\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Sign Up</span>
            </a>
          </li>
        </ul>
      </div>

      <div class=\"mx-4\">
        <!-- load phantom colors for card after: -->
        <p class=\"invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:from-blue-700 after:to-cyan-500 after:from-orange-500 after:to-yellow-500 after:from-green-600 after:to-lime-400 after:from-red-600 after:to-orange-600 after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400\"></p>
        <div class=\"relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border\" sidenav-card>
          <img class=\"w-1/2 mx-auto\" src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/illustrations/icon-documentation.svg"), "html", null, true);
        yield "\" alt=\"sidebar illustrations\" />
          <div class=\"flex-auto w-full p-4 pt-0 text-center\">
            <div class=\"transition-all duration-200 ease-nav-brand\">
              <h6 class=\"mb-0 dark:text-white text-slate-700\">Need help?</h6>
              <p class=\"mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60\">Please check our docs</p>
            </div>
          </div>
        </div>
        <a href=\"https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/\" target=\"_blank\" class=\"inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px\">Documentation</a>
        <!-- pro btn  -->
        <a class=\"inline-block w-full px-8 py-2 text-xs font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md select-none bg-150 bg-x-25 hover:shadow-xs hover:-translate-y-px\" href=\"https://www.creative-tim.com/product/argon-dashboard-pro-tailwind?ref=sidebarfree\" target=\"_blank\">Upgrade to pro</a>
      </div>
    </aside>
        ";
        // line 147
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 148
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  323 => 147,  312 => 34,  299 => 33,  288 => 24,  275 => 23,  262 => 148,  260 => 147,  244 => 134,  227 => 120,  215 => 111,  203 => 102,  187 => 89,  175 => 80,  163 => 71,  151 => 62,  139 => 53,  126 => 43,  122 => 42,  113 => 35,  111 => 33,  107 => 32,  102 => 30,  97 => 28,  92 => 25,  90 => 23,  83 => 19,  76 => 15,  72 => 14,  62 => 7,  58 => 6,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{asset('assets/img/apple-icon.png')}}\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets/img/favicon.png')}}\" />
    <title>Argon Dashboard 2 Tailwind by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <!-- Nucleo Icons -->
    <link href=\"{{asset('assets/css/nucleo-icons.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{asset('assets/css/nucleo-svg.css')}}\" rel=\"stylesheet\" />
    <!-- Popper -->
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>
    <!-- Main Styling -->
    <link href=\"{{asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}\" rel=\"stylesheet\" />



        {% block stylesheets %}
        {% endblock %}



    <script src=\"{{asset('assets/js/plugins/chartjs.min.js')}}\" async></script>
    <!-- plugin for scrollbar  -->
    <script src=\"{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}\" async></script>
    <!-- main script file  -->
    <script src=\"{{asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}\" async></script>
        {% block javascripts %}
        {% endblock %}
    </head>
    <body>

        <aside class=\"fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0\" aria-expanded=\"false\">
      <div class=\"h-19\">
        <i class=\"absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden\" sidenav-close></i>
        <a class=\"block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700\" href=\"https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html\" target=\"_blank\">
          <img src=\"{{asset('assets/img/logo-ct-dark.png')}}\" class=\"inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8\" alt=\"main_logo\" />
          <img src=\"{{asset('assets/img/logo-ct.png')}}\" class=\"hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8\" alt=\"main_logo\" />
          <span class=\"ml-1 font-semibold transition-all duration-200 ease-nav-brand\">Argon Dashboard 2</span>
        </a>
      </div>

      <hr class=\"h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent\" />

      <div class=\"items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full\">
        <ul class=\"flex flex-col pl-0 mb-0\">
          <li class=\"mt-0.5 w-full\">
            <a class=\"py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors\" href=\"{{asset('pages/dashboard.html')}}\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Dashboard</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/tables.html')}}\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Tables</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/billing.html')}}\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Billing</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/virtual-reality.html')}}\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-cyan-500 ni ni-app\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Virtual Reality</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/rtl.html')}}\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-red-600 ni ni-world-2\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">RTL</span>
            </a>
          </li>

          <li class=\"w-full mt-4\">
            <h6 class=\"pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60\">Account pages</h6>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/profile.html')}}\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Profile</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/sign-in.html')}}\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-orange-500 ni ni-single-copy-04\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Sign In</span>
            </a>
          </li>

          <li class=\"mt-0.5 w-full\">
            <a class=\" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors\" href=\"{{asset('pages/sign-up.html')}}\">
              <div class=\"mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5\">
                <i class=\"relative top-0 text-sm leading-normal text-cyan-500 ni ni-collection\"></i>
              </div>
              <span class=\"ml-1 duration-300 opacity-100 pointer-events-none ease\">Sign Up</span>
            </a>
          </li>
        </ul>
      </div>

      <div class=\"mx-4\">
        <!-- load phantom colors for card after: -->
        <p class=\"invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:from-blue-700 after:to-cyan-500 after:from-orange-500 after:to-yellow-500 after:from-green-600 after:to-lime-400 after:from-red-600 after:to-orange-600 after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400\"></p>
        <div class=\"relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border\" sidenav-card>
          <img class=\"w-1/2 mx-auto\" src=\"{{asset('assets/img/illustrations/icon-documentation.svg')}}\" alt=\"sidebar illustrations\" />
          <div class=\"flex-auto w-full p-4 pt-0 text-center\">
            <div class=\"transition-all duration-200 ease-nav-brand\">
              <h6 class=\"mb-0 dark:text-white text-slate-700\">Need help?</h6>
              <p class=\"mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60\">Please check our docs</p>
            </div>
          </div>
        </div>
        <a href=\"https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/\" target=\"_blank\" class=\"inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px\">Documentation</a>
        <!-- pro btn  -->
        <a class=\"inline-block w-full px-8 py-2 text-xs font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md select-none bg-150 bg-x-25 hover:shadow-xs hover:-translate-y-px\" href=\"https://www.creative-tim.com/product/argon-dashboard-pro-tailwind?ref=sidebarfree\" target=\"_blank\">Upgrade to pro</a>
      </div>
    </aside>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\skonb\\Desktop\\symfony\\my_project_directory\\templates\\base.html.twig");
    }
}
