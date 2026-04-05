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

/* error/get_display.twig */
class __TwigTemplate_87c6a6a5150a3a6ba7fa1d60183ecaac extends Template
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
        yield "<div class=\"alert alert-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" role=\"alert\">";
        // line 2
        if ((($tmp =  !(isset($context["is_user_error"]) || array_key_exists("is_user_error", $context) ? $context["is_user_error"] : (function () { throw new RuntimeError('Variable "is_user_error" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "<p><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 3, $this->source); })()), "html", null, true);
            yield "</strong> in ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 3, $this->source); })()), "html", null, true);
            yield "#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new RuntimeError('Variable "line" does not exist.', 3, $this->source); })()), "html", null, true);
            yield "</p>";
        }
        // line 6
        yield (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 6, $this->source); })());
        // line 8
        if (( !(isset($context["is_user_error"]) || array_key_exists("is_user_error", $context) ? $context["is_user_error"] : (function () { throw new RuntimeError('Variable "is_user_error" does not exist.', 8, $this->source); })()) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["formatted_backtrace"]) || array_key_exists("formatted_backtrace", $context) ? $context["formatted_backtrace"] : (function () { throw new RuntimeError('Variable "formatted_backtrace" does not exist.', 8, $this->source); })())))) {
            // line 9
            yield "<p class=\"mt-3\"><strong>Backtrace</strong></p>";
            // line 10
            yield (isset($context["formatted_backtrace"]) || array_key_exists("formatted_backtrace", $context) ? $context["formatted_backtrace"] : (function () { throw new RuntimeError('Variable "formatted_backtrace" does not exist.', 10, $this->source); })());
        }
        // line 12
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "error/get_display.twig";
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
        return array (  66 => 12,  63 => 10,  61 => 9,  59 => 8,  57 => 6,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"alert alert-{{ context }}\" role=\"alert\">
  {%- if not is_user_error -%}
    <p><strong>{{ type }}</strong> in {{ file }}#{{ line }}</p>
  {%- endif -%}

  {{ message|raw }}

  {%- if not is_user_error and formatted_backtrace is not empty -%}
    <p class=\"mt-3\"><strong>Backtrace</strong></p>
    {{- formatted_backtrace|raw -}}
  {%- endif -%}
</div>
", "error/get_display.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/error/get_display.twig");
    }
}
