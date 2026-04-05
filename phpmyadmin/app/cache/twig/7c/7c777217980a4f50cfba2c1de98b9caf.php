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

/* display/results/table_headers_for_columns.twig */
class __TwigTemplate_b5911dd305c86af8554d10b4901fc8db extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 2
            yield "  <th class=\"draggable position-sticky bg-body";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_column_numeric", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" text-end") : (""));
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_column_hidden", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" hide") : (""));
            // line 3
            yield (((($tmp = (isset($context["is_sortable"]) || array_key_exists("is_sortable", $context) ? $context["is_sortable"] : (function () { throw new RuntimeError('Variable "is_sortable" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" column_heading") : (""));
            yield ((((isset($context["is_sortable"]) || array_key_exists("is_sortable", $context) ? $context["is_sortable"] : (function () { throw new RuntimeError('Variable "is_sortable" does not exist.', 3, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_browse_marker_enabled", [], "any", false, false, false, 3))) ? (" marker") : (""));
            yield ((((isset($context["is_sortable"]) || array_key_exists("is_sortable", $context) ? $context["is_sortable"] : (function () { throw new RuntimeError('Variable "is_sortable" does not exist.', 3, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_browse_pointer_enabled", [], "any", false, false, false, 3))) ? (" pointer") : (""));
            // line 4
            yield ((( !(isset($context["is_sortable"]) || array_key_exists("is_sortable", $context) ? $context["is_sortable"] : (function () { throw new RuntimeError('Variable "is_sortable" does not exist.', 4, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "has_condition", [], "any", false, false, false, 4))) ? (" condition") : (""));
            yield "\" data-column=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "column_name", [], "any", false, false, false, 4), "html", null, true);
            yield "\">
    ";
            // line 5
            if ((($tmp = (isset($context["is_sortable"]) || array_key_exists("is_sortable", $context) ? $context["is_sortable"] : (function () { throw new RuntimeError('Variable "is_sortable" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "      ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["column"], "order_link", [], "any", false, false, false, 6);
                yield "
    ";
            } else {
                // line 8
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "column_name", [], "any", false, false, false, 8), "html", null, true);
                yield "
    ";
            }
            // line 10
            yield "    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["column"], "comments", [], "any", false, false, false, 10);
            yield "
  </th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "display/results/table_headers_for_columns.twig";
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
        return array (  74 => 10,  68 => 8,  62 => 6,  60 => 5,  54 => 4,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for column in columns %}
  <th class=\"draggable position-sticky bg-body{{ column.is_column_numeric ? ' text-end' }}{{ column.is_column_hidden ? ' hide' -}}
    {{- is_sortable ? ' column_heading' }}{{ is_sortable and column.is_browse_marker_enabled ? ' marker' }}{{ is_sortable and column.is_browse_pointer_enabled ? ' pointer' -}}
    {{- not is_sortable and column.has_condition ? ' condition' }}\" data-column=\"{{ column.column_name }}\">
    {% if is_sortable %}
      {{ column.order_link|raw }}
    {% else %}
      {{ column.column_name }}
    {% endif %}
    {{ column.comments|raw }}
  </th>
{% endfor %}
", "display/results/table_headers_for_columns.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/display/results/table_headers_for_columns.twig");
    }
}
