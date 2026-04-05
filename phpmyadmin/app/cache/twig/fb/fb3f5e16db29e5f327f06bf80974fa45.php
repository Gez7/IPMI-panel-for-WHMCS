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
class __TwigTemplate_ad5577a54d23e42ae9df89086e15c5a4 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["context"] ?? null), "html", null, true);
        yield "\" role=\"alert\">";
        // line 2
        if ((($tmp =  !($context["is_user_error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "<p><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "</strong> in ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["file"] ?? null), "html", null, true);
            yield "#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["line"] ?? null), "html", null, true);
            yield "</p>";
        }
        // line 6
        yield ($context["message"] ?? null);
        // line 8
        if (( !($context["is_user_error"] ?? null) &&  !Twig\Extension\CoreExtension::testEmpty(($context["formatted_backtrace"] ?? null)))) {
            // line 9
            yield "<p class=\"mt-3\"><strong>Backtrace</strong></p>";
            // line 10
            yield ($context["formatted_backtrace"] ?? null);
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
        return new Source("", "error/get_display.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/error/get_display.twig");
    }
}
