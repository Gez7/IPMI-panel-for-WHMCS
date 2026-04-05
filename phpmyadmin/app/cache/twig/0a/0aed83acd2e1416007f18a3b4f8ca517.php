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

/* navigation/tree/state.twig */
class __TwigTemplate_484d0e33bda8c1ba28efe5e05995ae85 extends Template
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
        yield (isset($context["quick_warp"]) || array_key_exists("quick_warp", $context) ? $context["quick_warp"] : (function () { throw new RuntimeError('Variable "quick_warp" does not exist.', 1, $this->source); })());
        yield "

<div class=\"clearfloat\"></div>

<ul>
  ";
        // line 6
        yield (isset($context["fast_filter"]) || array_key_exists("fast_filter", $context) ? $context["fast_filter"] : (function () { throw new RuntimeError('Variable "fast_filter" does not exist.', 6, $this->source); })());
        yield "
  ";
        // line 7
        yield (isset($context["controls"]) || array_key_exists("controls", $context) ? $context["controls"] : (function () { throw new RuntimeError('Variable "controls" does not exist.', 7, $this->source); })());
        yield "
</ul>

";
        // line 10
        yield (isset($context["page_selector"]) || array_key_exists("page_selector", $context) ? $context["page_selector"] : (function () { throw new RuntimeError('Variable "page_selector" does not exist.', 10, $this->source); })());
        yield "

<div id='pma_navigation_tree_content'>
  <ul>
    ";
        // line 14
        yield (isset($context["nodes"]) || array_key_exists("nodes", $context) ? $context["nodes"] : (function () { throw new RuntimeError('Variable "nodes" does not exist.', 14, $this->source); })());
        yield "
  </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/tree/state.twig";
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
        return array (  67 => 14,  60 => 10,  54 => 7,  50 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ quick_warp|raw }}

<div class=\"clearfloat\"></div>

<ul>
  {{ fast_filter|raw }}
  {{ controls|raw }}
</ul>

{{ page_selector|raw }}

<div id='pma_navigation_tree_content'>
  <ul>
    {{ nodes|raw }}
  </ul>
</div>
", "navigation/tree/state.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/tree/state.twig");
    }
}
