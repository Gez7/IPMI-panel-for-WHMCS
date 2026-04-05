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

/* table/search/column_comparison_operators.twig */
class __TwigTemplate_3c630abf6d4ba8565c92f70f5cb1ca7c extends Template
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
        yield "<select class=\"column-operator\" id=\"ColumnOperator";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_index"]) || array_key_exists("search_index", $context) ? $context["search_index"] : (function () { throw new RuntimeError('Variable "search_index" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" name=\"criteriaColumnOperators[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_index"]) || array_key_exists("search_index", $context) ? $context["search_index"] : (function () { throw new RuntimeError('Variable "search_index" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "]\">
  ";
        // line 2
        yield (isset($context["type_operators"]) || array_key_exists("type_operators", $context) ? $context["type_operators"] : (function () { throw new RuntimeError('Variable "type_operators" does not exist.', 2, $this->source); })());
        yield "
</select>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/search/column_comparison_operators.twig";
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
        return array (  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<select class=\"column-operator\" id=\"ColumnOperator{{ search_index }}\" name=\"criteriaColumnOperators[{{ search_index }}]\">
  {{ type_operators|raw }}
</select>
", "table/search/column_comparison_operators.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/search/column_comparison_operators.twig");
    }
}
