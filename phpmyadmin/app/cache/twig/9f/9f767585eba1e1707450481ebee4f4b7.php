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

/* filter.twig */
class __TwigTemplate_df99b061604c825e3127442324cf302a extends Template
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
        yield "<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Filters"), "html", null, true);
        yield "</div>
  <div class=\"card-body row row-cols-lg-auto gy-1 gx-3 align-items-center\">
    <label class=\"col-12 col-form-label\" for=\"filterText\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Containing the word:"), "html", null, true);
        yield "</label>
    <div class=\"col-12\">
      <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filter_value"]) || array_key_exists("filter_value", $context) ? $context["filter_value"] : (function () { throw new RuntimeError('Variable "filter_value" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\">
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
        return "filter.twig";
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
        return array (  55 => 6,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">{{ t('Filters') }}</div>
  <div class=\"card-body row row-cols-lg-auto gy-1 gx-3 align-items-center\">
    <label class=\"col-12 col-form-label\" for=\"filterText\">{{ t('Containing the word:') }}</label>
    <div class=\"col-12\">
      <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"{{ filter_value }}\">
    </div>
  </div>
</div>
", "filter.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/filter.twig");
    }
}
