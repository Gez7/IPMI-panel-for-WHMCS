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

/* error/generic.twig */
class __TwigTemplate_00507d5eca2245851de12a19e26286b7 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE HTML>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 2, $this->source); })()), "text_dir", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
<head>
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
    <title>phpMyAdmin</title>
    <meta charset=\"utf-8\">
    <style type=\"text/css\">
        html {
            padding: 0;
            margin: 0;
        }
        body  {
            font-family: sans-serif;
            font-size: small;
            color: #000000;
            background-color: #F5F5F5;
            margin: 1em;
        }
        h1 {
            margin: 0;
            padding: 0.3em;
            font-size: 1.4em;
            font-weight: bold;
            color: #ffffff;
            background-color: #ff0000;
        }
        .errormessage {
            border: 0.1em solid red;
            background-color: #ffeeee;
        }
        p {
            margin: 0;
            padding: 0.5em;
        }
    </style>
</head>
<body>
<h1>phpMyAdmin - ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Error"), "html", null, true);
        yield "</h1>
<div class=\"errormessage\">
<p>";
        // line 41
        yield (isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new RuntimeError('Variable "error_message" does not exist.', 41, $this->source); })());
        yield "</p>
</div>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "error/generic.twig";
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
        return array (  92 => 41,  87 => 39,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"{{ lang }}\" dir=\"{{ pma.text_dir }}\">
<head>
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
    <title>phpMyAdmin</title>
    <meta charset=\"utf-8\">
    <style type=\"text/css\">
        html {
            padding: 0;
            margin: 0;
        }
        body  {
            font-family: sans-serif;
            font-size: small;
            color: #000000;
            background-color: #F5F5F5;
            margin: 1em;
        }
        h1 {
            margin: 0;
            padding: 0.3em;
            font-size: 1.4em;
            font-weight: bold;
            color: #ffffff;
            background-color: #ff0000;
        }
        .errormessage {
            border: 0.1em solid red;
            background-color: #ffeeee;
        }
        p {
            margin: 0;
            padding: 0.5em;
        }
    </style>
</head>
<body>
<h1>phpMyAdmin - {{ t('Error') }}</h1>
<div class=\"errormessage\">
<p>{{ error_message|raw }}</p>
</div>
</body>
</html>
", "error/generic.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/error/generic.twig");
    }
}
