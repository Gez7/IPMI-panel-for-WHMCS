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

/* server/status/status/index.twig */
class __TwigTemplate_6b903a0816ca31efea8518228dcd9d94 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "server/status/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["active"] = "status";
        // line 1
        $this->parent = $this->load("server/status/base.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "
";
        // line 5
        if ((($tmp = (isset($context["is_data_loaded"]) || array_key_exists("is_data_loaded", $context) ? $context["is_data_loaded"] : (function () { throw new RuntimeError('Variable "is_data_loaded" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "  <div class=\"row\"><h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Network traffic since startup: %s"), (isset($context["network_traffic"]) || array_key_exists("network_traffic", $context) ? $context["network_traffic"] : (function () { throw new RuntimeError('Variable "network_traffic" does not exist.', 6, $this->source); })())), "html", null, true);
            yield "</h3></div>
  <div class=\"row\"><p>";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("This MySQL server has been running for %1\$s. It started up on %2\$s."), (isset($context["uptime"]) || array_key_exists("uptime", $context) ? $context["uptime"] : (function () { throw new RuntimeError('Variable "uptime" does not exist.', 7, $this->source); })()), (isset($context["start_time"]) || array_key_exists("start_time", $context) ? $context["start_time"] : (function () { throw new RuntimeError('Variable "start_time" does not exist.', 7, $this->source); })())), "html", null, true);
            yield "</p></div>

<div class=\"row align-items-start\">
  <table class=\"table table-striped table-hover col-12 col-md-5 w-auto\">
    <thead>
      <tr>
        <th scope=\"col\">
          ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Traffic"), "html", null, true);
            yield "
          ";
            // line 15
            yield PhpMyAdmin\Html\Generator::showHint(\_gettext("On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect."));
            yield "
        </th>
        <th class=\"text-end\" scope=\"col\">#</th>
        <th class=\"text-end\" scope=\"col\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Average per hour
\_gettext("ø per hour")
, "html", null, true);
            yield "</th>
      </tr>
    </thead>

    <tbody>
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["traffic"]) || array_key_exists("traffic", $context) ? $context["traffic"] : (function () { throw new RuntimeError('Variable "traffic" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["each_traffic"]) {
                // line 24
                yield "        <tr>
          <th scope=\"row\">";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_traffic"], "name", [], "any", false, false, false, 25), "html", null, true);
                yield "</th>
          <td class=\"font-monospace text-end\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_traffic"], "number", [], "any", false, false, false, 26), "html", null, true);
                yield "</td>
          <td class=\"font-monospace text-end\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_traffic"], "per_hour", [], "any", false, false, false, 27), "html", null, true);
                yield "</td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['each_traffic'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "    </tbody>
  </table>

  <table class=\"table table-striped table-hover col-12 col-md-6 w-auto\">
    <thead>
      <tr>
        <th scope=\"col\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Connections"), "html", null, true);
            yield "</th>
        <th class=\"text-end\" scope=\"col\">#</th>
        <th class=\"text-end\" scope=\"col\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Average per hour
\_gettext("ø per hour")
, "html", null, true);
            yield "</th>
        <th class=\"text-end\" scope=\"col\">%</th>
      </tr>
    </thead>

    <tbody>
      ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["connections"]) || array_key_exists("connections", $context) ? $context["connections"] : (function () { throw new RuntimeError('Variable "connections" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["connection"]) {
                // line 45
                yield "        <tr>
          <th>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["connection"], "name", [], "any", false, false, false, 46), "html", null, true);
                yield "</th>
          <td class=\"font-monospace text-end\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["connection"], "number", [], "any", false, false, false, 47), "html", null, true);
                yield "</td>
          <td class=\"font-monospace text-end\">";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["connection"], "per_hour", [], "any", false, false, false, 48), "html", null, true);
                yield "</td>
          <td class=\"font-monospace text-end\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["connection"], "percentage", [], "any", false, false, false, 49), "html", null, true);
                yield "</td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['connection'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "    </tbody>
  </table>
</div>

  ";
            // line 56
            if (((isset($context["is_primary"]) || array_key_exists("is_primary", $context) ? $context["is_primary"] : (function () { throw new RuntimeError('Variable "is_primary" does not exist.', 56, $this->source); })()) || (isset($context["is_replica"]) || array_key_exists("is_replica", $context) ? $context["is_replica"] : (function () { throw new RuntimeError('Variable "is_replica" does not exist.', 56, $this->source); })()))) {
                // line 57
                yield "    <p class=\"alert alert-primary clearfloat\" role=\"alert\">
      ";
                // line 58
                if (((isset($context["is_primary"]) || array_key_exists("is_primary", $context) ? $context["is_primary"] : (function () { throw new RuntimeError('Variable "is_primary" does not exist.', 58, $this->source); })()) && (isset($context["is_replica"]) || array_key_exists("is_replica", $context) ? $context["is_replica"] : (function () { throw new RuntimeError('Variable "is_replica" does not exist.', 58, $this->source); })()))) {
                    // line 59
                    yield "        ";
                    yield \_gettext("This MySQL server works as <b>primary</b> and <b>replica</b> in <b>replication</b> process.");
                    yield "
      ";
                } elseif ((($tmp =                 // line 60
(isset($context["is_primary"]) || array_key_exists("is_primary", $context) ? $context["is_primary"] : (function () { throw new RuntimeError('Variable "is_primary" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 61
                    yield "        ";
                    yield \_gettext("This MySQL server works as <b>primary</b> in <b>replication</b> process.");
                    yield "
      ";
                } elseif ((($tmp =                 // line 62
(isset($context["is_replica"]) || array_key_exists("is_replica", $context) ? $context["is_replica"] : (function () { throw new RuntimeError('Variable "is_replica" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 63
                    yield "        ";
                    yield \_gettext("This MySQL server works as <b>replica</b> in <b>replication</b> process.");
                    yield "
      ";
                }
                // line 65
                yield "    </p>

    <hr class=\"clearfloat\">

    <h3>";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replication status"), "html", null, true);
                yield "</h3>

    ";
                // line 71
                yield (isset($context["replication"]) || array_key_exists("replication", $context) ? $context["replication"] : (function () { throw new RuntimeError('Variable "replication" does not exist.', 71, $this->source); })());
                yield "
  ";
            }
            // line 73
            yield "
";
        } else {
            // line 75
            yield "  ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Not enough privilege to view server status."));
            yield "
";
        }
        // line 77
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/status/status/index.twig";
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
        return array (  238 => 77,  232 => 75,  228 => 73,  223 => 71,  218 => 69,  212 => 65,  206 => 63,  204 => 62,  199 => 61,  197 => 60,  192 => 59,  190 => 58,  187 => 57,  185 => 56,  179 => 52,  170 => 49,  166 => 48,  162 => 47,  158 => 46,  155 => 45,  151 => 44,  139 => 38,  134 => 36,  126 => 30,  117 => 27,  113 => 26,  109 => 25,  106 => 24,  102 => 23,  91 => 18,  85 => 15,  81 => 14,  71 => 7,  66 => 6,  64 => 5,  61 => 4,  54 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'status' %}
{% block content %}

{% if is_data_loaded %}
  <div class=\"row\"><h3>{{ t('Network traffic since startup: %s')|format(network_traffic) }}</h3></div>
  <div class=\"row\"><p>{{ t('This MySQL server has been running for %1\$s. It started up on %2\$s.')|format(uptime, start_time) }}</p></div>

<div class=\"row align-items-start\">
  <table class=\"table table-striped table-hover col-12 col-md-5 w-auto\">
    <thead>
      <tr>
        <th scope=\"col\">
          {{ t('Traffic') }}
          {{ show_hint(t('On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.')) }}
        </th>
        <th class=\"text-end\" scope=\"col\">#</th>
        <th class=\"text-end\" scope=\"col\">{{ t('ø per hour', notes = 'Average per hour') }}</th>
      </tr>
    </thead>

    <tbody>
      {% for each_traffic in traffic %}
        <tr>
          <th scope=\"row\">{{ each_traffic.name }}</th>
          <td class=\"font-monospace text-end\">{{ each_traffic.number }}</td>
          <td class=\"font-monospace text-end\">{{ each_traffic.per_hour }}</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>

  <table class=\"table table-striped table-hover col-12 col-md-6 w-auto\">
    <thead>
      <tr>
        <th scope=\"col\">{{ t('Connections') }}</th>
        <th class=\"text-end\" scope=\"col\">#</th>
        <th class=\"text-end\" scope=\"col\">{{ t('ø per hour', notes = 'Average per hour') }}</th>
        <th class=\"text-end\" scope=\"col\">%</th>
      </tr>
    </thead>

    <tbody>
      {% for connection in connections %}
        <tr>
          <th>{{ connection.name }}</th>
          <td class=\"font-monospace text-end\">{{ connection.number }}</td>
          <td class=\"font-monospace text-end\">{{ connection.per_hour }}</td>
          <td class=\"font-monospace text-end\">{{ connection.percentage }}</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</div>

  {% if is_primary or is_replica %}
    <p class=\"alert alert-primary clearfloat\" role=\"alert\">
      {% if is_primary and is_replica %}
        {{ t('This MySQL server works as <b>primary</b> and <b>replica</b> in <b>replication</b> process.')|raw }}
      {% elseif is_primary %}
        {{ t('This MySQL server works as <b>primary</b> in <b>replication</b> process.')|raw }}
      {% elseif is_replica %}
        {{ t('This MySQL server works as <b>replica</b> in <b>replication</b> process.')|raw }}
      {% endif %}
    </p>

    <hr class=\"clearfloat\">

    <h3>{{ t('Replication status') }}</h3>

    {{ replication|raw }}
  {% endif %}

{% else %}
  {{ t('Not enough privilege to view server status.')|error }}
{% endif %}

{% endblock %}
", "server/status/status/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/status/index.twig");
    }
}
