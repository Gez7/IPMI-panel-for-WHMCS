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

/* display/results/row_data.twig */
class __TwigTemplate_3be283629604e03c0a448585879606c1 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["decimals"]) || array_key_exists("decimals", $context) ? $context["decimals"] : (function () { throw new RuntimeError('Variable "decimals" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" data-type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\"";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["original_length"]) || array_key_exists("original_length", $context) ? $context["original_length"] : (function () { throw new RuntimeError('Variable "original_length" does not exist.', 1, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " data-originallength=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["original_length"]) || array_key_exists("original_length", $context) ? $context["original_length"] : (function () { throw new RuntimeError('Variable "original_length" does not exist.', 1, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield " class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["td_class"]) || array_key_exists("td_class", $context) ? $context["td_class"] : (function () { throw new RuntimeError('Variable "td_class" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\">";
        // line 2
        yield (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 2, $this->source); })());
        // line 3
        yield "</td>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "display/results/row_data.twig";
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
        return array (  58 => 3,  56 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<td data-decimals=\"{{ decimals }}\" data-type=\"{{ type }}\"{% if original_length is not empty %} data-originallength=\"{{ original_length }}\"{% endif %} class=\"{{ td_class }}\">
  {{- value|raw -}}
</td>
", "display/results/row_data.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/display/results/row_data.twig");
    }
}
