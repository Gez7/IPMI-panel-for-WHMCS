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

/* table/insert/get_html_for_insert_edit_form_header.twig */
class __TwigTemplate_71209daead4c064da2c571591edfe1f4 extends Template
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
        yield "<form id=\"insertForm\" class=\"lock-page";
        yield ((((isset($context["has_blob_field"]) || array_key_exists("has_blob_field", $context) ? $context["has_blob_field"] : (function () { throw new RuntimeError('Variable "has_blob_field" does not exist.', 1, $this->source); })()) && (isset($context["is_upload"]) || array_key_exists("is_upload", $context) ? $context["is_upload"] : (function () { throw new RuntimeError('Variable "is_upload" does not exist.', 1, $this->source); })()))) ? (" disableAjax") : (""));
        yield "\" method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/replace");
        yield "\" name=\"insertForm\"";
        yield (((($tmp = (isset($context["is_upload"]) || array_key_exists("is_upload", $context) ? $context["is_upload"] : (function () { throw new RuntimeError('Variable "is_upload" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" enctype=\"multipart/form-data\"") : (""));
        yield ">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/get_html_for_insert_edit_form_header.twig";
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
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"insertForm\" class=\"lock-page{{ has_blob_field and is_upload ? ' disableAjax' }}\" method=\"post\" action=\"{{ url('/table/replace') }}\" name=\"insertForm\"{{ is_upload ? ' enctype=\"multipart/form-data\"' }}>
", "table/insert/get_html_for_insert_edit_form_header.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/get_html_for_insert_edit_form_header.twig");
    }
}
