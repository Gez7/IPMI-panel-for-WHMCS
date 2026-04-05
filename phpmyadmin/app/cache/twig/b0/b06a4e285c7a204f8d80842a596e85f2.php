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

/* sql/sql_query_results.twig */
class __TwigTemplate_742ba62b848b8cd513d96d2bf15817a8 extends Template
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
        yield "<div class=\"sqlqueryresults ajax\">
    ";
        // line 2
        yield (isset($context["previous_update_query"]) || array_key_exists("previous_update_query", $context) ? $context["previous_update_query"] : (function () { throw new RuntimeError('Variable "previous_update_query" does not exist.', 2, $this->source); })());
        yield "
    ";
        // line 3
        yield (isset($context["profiling_chart"]) || array_key_exists("profiling_chart", $context) ? $context["profiling_chart"] : (function () { throw new RuntimeError('Variable "profiling_chart" does not exist.', 3, $this->source); })());
        yield "
    ";
        // line 4
        yield (isset($context["missing_unique_column_message"]) || array_key_exists("missing_unique_column_message", $context) ? $context["missing_unique_column_message"] : (function () { throw new RuntimeError('Variable "missing_unique_column_message" does not exist.', 4, $this->source); })());
        yield "
    ";
        // line 5
        yield (isset($context["bookmark_created_message"]) || array_key_exists("bookmark_created_message", $context) ? $context["bookmark_created_message"] : (function () { throw new RuntimeError('Variable "bookmark_created_message" does not exist.', 5, $this->source); })());
        yield "
    ";
        // line 6
        yield (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 6, $this->source); })());
        yield "
    ";
        // line 7
        yield (isset($context["bookmark_support"]) || array_key_exists("bookmark_support", $context) ? $context["bookmark_support"] : (function () { throw new RuntimeError('Variable "bookmark_support" does not exist.', 7, $this->source); })());
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sql/sql_query_results.twig";
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
        return array (  65 => 7,  61 => 6,  57 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"sqlqueryresults ajax\">
    {{ previous_update_query|raw }}
    {{ profiling_chart|raw }}
    {{ missing_unique_column_message|raw }}
    {{ bookmark_created_message|raw }}
    {{ table|raw }}
    {{ bookmark_support|raw }}
</div>
", "sql/sql_query_results.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/sql_query_results.twig");
    }
}
