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

/* display/results/null_display.twig */
class __TwigTemplate_5eadefe269268accbfe8d405eeeb32a1 extends Template
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
        yield "<td data-decimals=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_decimals"]) || array_key_exists("data_decimals", $context) ? $context["data_decimals"] : (function () { throw new RuntimeError('Variable "data_decimals" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\"
    data-type=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["data_type"]) || array_key_exists("data_type", $context) ? $context["data_type"] : (function () { throw new RuntimeError('Variable "data_type" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\"
    ";
        // line 4
        yield "    class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 4, $this->source); })()), "html", null, true);
        yield " null\">
    <em>NULL</em>
</td>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "display/results/null_display.twig";
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
        return array (  51 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<td data-decimals=\"{{ data_decimals }}\"
    data-type=\"{{ data_type }}\"
    {# The null class is needed for grid editing #}
    class=\"{{ classes }} null\">
    <em>NULL</em>
</td>
", "display/results/null_display.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/display/results/null_display.twig");
    }
}
