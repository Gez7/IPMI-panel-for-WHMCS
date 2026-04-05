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

/* table/browse_foreigners/column_element.twig */
class __TwigTemplate_6bd9c337bd5ff89cb8bf281ee96b345b extends Template
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
        yield "<td";
        yield (((($tmp = (isset($context["nowrap"]) || array_key_exists("nowrap", $context) ? $context["nowrap"] : (function () { throw new RuntimeError('Variable "nowrap" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"text-nowrap\"") : (""));
        yield ">
    ";
        // line 2
        yield (((($tmp = (isset($context["is_selected"]) || array_key_exists("is_selected", $context) ? $context["is_selected"] : (function () { throw new RuntimeError('Variable "is_selected" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<strong>") : (""));
        // line 3
        yield "<a class=\"foreign_value\" data-key=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["keyname"]) || array_key_exists("keyname", $context) ? $context["keyname"] : (function () { throw new RuntimeError('Variable "keyname" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\" href=\"#\" title=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use this value"), "html", null, true);
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((": " . (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })())), "html", null, true)) : (""));
        yield "\">";
        // line 5
        if ((($tmp = (isset($context["nowrap"]) || array_key_exists("nowrap", $context) ? $context["nowrap"] : (function () { throw new RuntimeError('Variable "nowrap" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["keyname"]) || array_key_exists("keyname", $context) ? $context["keyname"] : (function () { throw new RuntimeError('Variable "keyname" does not exist.', 6, $this->source); })()), "html", null, true);
        } else {
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 8, $this->source); })()), "html", null, true);
        }
        // line 10
        yield "</a>";
        // line 11
        yield (((($tmp = (isset($context["is_selected"]) || array_key_exists("is_selected", $context) ? $context["is_selected"] : (function () { throw new RuntimeError('Variable "is_selected" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("</strong>") : (""));
        yield "
</td>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/browse_foreigners/column_element.twig";
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
        return array (  67 => 11,  65 => 10,  62 => 8,  59 => 6,  57 => 5,  53 => 4,  49 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<td{{ nowrap ? ' class=\"text-nowrap\"' }}>
    {{ is_selected ? '<strong>' -}}
        <a class=\"foreign_value\" data-key=\"{{ keyname }}\" href=\"#\" title=\"
            {{- t('Use this value') }}{{ title is not empty ? ': ' ~ title }}\">
            {%- if nowrap -%}
                {{- keyname -}}
            {%- else -%}
                {{- description -}}
            {%- endif -%}
        </a>
    {{- is_selected ? '</strong>' }}
</td>
", "table/browse_foreigners/column_element.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/browse_foreigners/column_element.twig");
    }
}
