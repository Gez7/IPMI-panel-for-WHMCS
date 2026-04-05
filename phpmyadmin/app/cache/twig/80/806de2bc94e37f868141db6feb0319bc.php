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

/* table/tracking/index.twig */
class __TwigTemplate_038e65e1374fd62e94e3e5d0d52ba5e7 extends Template
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
        yield (isset($context["active_message"]) || array_key_exists("active_message", $context) ? $context["active_message"] : (function () { throw new RuntimeError('Variable "active_message" does not exist.', 1, $this->source); })());
        yield "

<br>

";
        // line 5
        yield (isset($context["action_message"]) || array_key_exists("action_message", $context) ? $context["action_message"] : (function () { throw new RuntimeError('Variable "action_message" does not exist.', 5, $this->source); })());
        yield "

";
        // line 7
        yield (isset($context["delete_version"]) || array_key_exists("delete_version", $context) ? $context["delete_version"] : (function () { throw new RuntimeError('Variable "delete_version" does not exist.', 7, $this->source); })());
        yield "

";
        // line 9
        yield (isset($context["create_version"]) || array_key_exists("create_version", $context) ? $context["create_version"] : (function () { throw new RuntimeError('Variable "create_version" does not exist.', 9, $this->source); })());
        yield "

";
        // line 11
        yield (isset($context["deactivate_tracking"]) || array_key_exists("deactivate_tracking", $context) ? $context["deactivate_tracking"] : (function () { throw new RuntimeError('Variable "deactivate_tracking" does not exist.', 11, $this->source); })());
        yield "

";
        // line 13
        yield (isset($context["activate_tracking"]) || array_key_exists("activate_tracking", $context) ? $context["activate_tracking"] : (function () { throw new RuntimeError('Variable "activate_tracking" does not exist.', 13, $this->source); })());
        yield "

";
        // line 15
        yield (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })());
        yield "

";
        // line 17
        yield (isset($context["sql_dump"]) || array_key_exists("sql_dump", $context) ? $context["sql_dump"] : (function () { throw new RuntimeError('Variable "sql_dump" does not exist.', 17, $this->source); })());
        yield "

";
        // line 19
        yield (isset($context["schema_snapshot"]) || array_key_exists("schema_snapshot", $context) ? $context["schema_snapshot"] : (function () { throw new RuntimeError('Variable "schema_snapshot" does not exist.', 19, $this->source); })());
        yield "

";
        // line 21
        yield (isset($context["tracking_report_rows"]) || array_key_exists("tracking_report_rows", $context) ? $context["tracking_report_rows"] : (function () { throw new RuntimeError('Variable "tracking_report_rows" does not exist.', 21, $this->source); })());
        yield "

";
        // line 23
        yield (isset($context["tracking_report"]) || array_key_exists("tracking_report", $context) ? $context["tracking_report"] : (function () { throw new RuntimeError('Variable "tracking_report" does not exist.', 23, $this->source); })());
        yield "

";
        // line 25
        yield (isset($context["main"]) || array_key_exists("main", $context) ? $context["main"] : (function () { throw new RuntimeError('Variable "main" does not exist.', 25, $this->source); })());
        yield "

<br class=\"clearfloat\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/tracking/index.twig";
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
        return array (  99 => 25,  94 => 23,  89 => 21,  84 => 19,  79 => 17,  74 => 15,  69 => 13,  64 => 11,  59 => 9,  54 => 7,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ active_message|raw }}

<br>

{{ action_message|raw }}

{{ delete_version|raw }}

{{ create_version|raw }}

{{ deactivate_tracking|raw }}

{{ activate_tracking|raw }}

{{ message|raw }}

{{ sql_dump|raw }}

{{ schema_snapshot|raw }}

{{ tracking_report_rows|raw }}

{{ tracking_report|raw }}

{{ main|raw }}

<br class=\"clearfloat\">
", "table/tracking/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/index.twig");
    }
}
