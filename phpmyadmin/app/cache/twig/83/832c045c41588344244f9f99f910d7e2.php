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

/* modals/gis_editor.twig */
class __TwigTemplate_816d592ea689426807a3c7eac7ec248d extends Template
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
        yield "<div class=\"modal fade\" id=\"gisEditorModal\" data-bs-backdrop=\"static\" tabindex=\"-1\" aria-labelledby=\"gisEditorModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-scrollable modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"gisEditorModalLabel\"></h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\" id=\"gis_editor\"></div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modals/gis_editor.twig";
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
        return array (  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"modal fade\" id=\"gisEditorModal\" data-bs-backdrop=\"static\" tabindex=\"-1\" aria-labelledby=\"gisEditorModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-scrollable modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\" id=\"gisEditorModalLabel\"></h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
      </div>
      <div class=\"modal-body\" id=\"gis_editor\"></div>
    </div>
  </div>
</div>
", "modals/gis_editor.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/modals/gis_editor.twig");
    }
}
