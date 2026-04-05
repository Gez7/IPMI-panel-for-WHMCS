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

/* server/replication/status_table.twig */
class __TwigTemplate_488edbe535b225cf30b54e25269e4590 extends Template
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
        yield "<div id=\"replication_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "_section\"";
        yield (((($tmp = (isset($context["is_hidden"]) || array_key_exists("is_hidden", $context) ? $context["is_hidden"] : (function () { throw new RuntimeError('Variable "is_hidden" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" style=\"display: none;\"") : (""));
        yield ">
  ";
        // line 2
        if ((($tmp = (isset($context["has_title"]) || array_key_exists("has_title", $context) ? $context["has_title"] : (function () { throw new RuntimeError('Variable "has_title" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    <h4>
      <a id=\"replication_";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\"></a>
      ";
            // line 5
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 5, $this->source); })()) == "primary")) {
                // line 6
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Primary status"), "html", null, true);
                yield "
      ";
            } else {
                // line 8
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replica status"), "html", null, true);
                yield "
      ";
            }
            // line 10
            yield "    </h4>
  ";
        }
        // line 12
        yield "
  <table id=\"server";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "replicationsummary\" class=\"table w-auto\">
    <thead>
      <tr>
        <th>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Variable"), "html", null, true);
        yield "</th>
        <th>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value"), "html", null, true);
        yield "</th>
      </tr>
    </thead>

    <tbody>
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
            // line 23
            yield "        <tr>
          <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
          <td class=\"text-end font-monospace\">
            <span";
            // line 26
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "status", [], "any", false, false, false, 26) == "text-danger")) {
                yield " class=\"text-danger\"";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "status", [], "any", false, false, false, 26) == "text-success")) {
                yield " class=\"text-success\"";
            }
            yield ">
              ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 27), "html", null, true);
            yield "
            </span>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['variable'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "    </tbody>
  </table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/replication/status_table.twig";
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
        return array (  128 => 32,  117 => 27,  109 => 26,  104 => 24,  101 => 23,  97 => 22,  89 => 17,  85 => 16,  79 => 13,  76 => 12,  72 => 10,  66 => 8,  60 => 6,  58 => 5,  54 => 4,  51 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"replication_{{ type }}_section\"{{ is_hidden ? ' style=\"display: none;\"' }}>
  {% if has_title %}
    <h4>
      <a id=\"replication_{{ type }}\"></a>
      {% if type == 'primary' %}
        {{ t('Primary status') }}
      {% else %}
        {{ t('Replica status') }}
      {% endif %}
    </h4>
  {% endif %}

  <table id=\"server{{ type }}replicationsummary\" class=\"table w-auto\">
    <thead>
      <tr>
        <th>{{ t('Variable') }}</th>
        <th>{{ t('Value') }}</th>
      </tr>
    </thead>

    <tbody>
      {% for variable in variables %}
        <tr>
          <td>{{ variable.name }}</td>
          <td class=\"text-end font-monospace\">
            <span{% if variable.status == 'text-danger' %} class=\"text-danger\"{% elseif variable.status == 'text-success' %} class=\"text-success\"{% endif %}>
              {{ variable.value }}
            </span>
          </td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</div>
", "server/replication/status_table.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/status_table.twig");
    }
}
