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

/* server/status/advisor/index.twig */
class __TwigTemplate_468a7eeb7fa357222ead356e35568d7c extends Template
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
        $context["active"] = "advisor";
        // line 1
        $this->parent = $this->load("server/status/base.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
  <h2>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Advisor system"), "html", null, true);
        yield "</h2>

  ";
        // line 8
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()))) {
            // line 9
            yield "    ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Not enough privilege to view the advisor."));
            yield "
  ";
        } else {
            // line 11
            yield "    <button type=\"button\" class=\"btn btn-secondary mb-4\" data-bs-toggle=\"modal\" data-bs-target=\"#advisorInstructionsModal\">
      ";
            // line 12
            yield PhpMyAdmin\Html\Generator::getIcon("b_help", \_gettext("Instructions"));
            yield "
    </button>

    <div class=\"modal fade\" id=\"advisorInstructionsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"advisorInstructionsModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"advisorInstructionsModalLabel\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Advisor system"), "html", null, true);
            yield "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "\"></button>
          </div>
          <div class=\"modal-body\">
            <p>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The Advisor system can provide recommendations on server variables by analyzing the server status variables."), "html", null, true);
            // line 25
            yield "</p>
            <p>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Do note however that this system provides recommendations based on simple calculations and by rule of thumb which may not necessarily apply to your system."), "html", null, true);
            // line 28
            yield "</p>
            <p>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Prior to changing any of the configuration, be sure to know what you are changing (by reading the documentation) and how to undo the change. Wrong tuning can have a very negative effect on performance."), "html", null, true);
            // line 31
            yield "</p>
            <p>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The best way to tune your system would be to change only one setting at a time, observe or benchmark your database, and undo the change if there was no clearly measurable improvement."), "html", null, true);
            // line 34
            yield "</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "</button>
          </div>
        </div>
      </div>
    </div>

    ";
            // line 43
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 43) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "errors", [], "any", false, false, false, 43)) > 0))) {
                // line 44
                yield "      <div class=\"alert alert-danger mt-2 mb-2\" role=\"alert\">
        <h4 class=\"alert-heading\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Errors occurred while executing rule expressions:"), "html", null, true);
                yield "</h4>
        <ul>
          ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "errors", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 48
                    yield "            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                    yield "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "        </ul>
      </div>
    ";
            }
            // line 53
            yield "
    ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "fired", [], "any", true, true, false, 54) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "fired", [], "any", false, false, false, 54)) > 0))) {
                // line 55
                yield "      <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Possible performance issues"), "html", null, true);
                yield "</h4>

      <div class=\"accordion mb-4\" id=\"rulesAccordion\">
        ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "fired", [], "any", false, false, false, 58));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                    // line 59
                    yield "          <div class=\"accordion-item\">
            <div class=\"accordion-header\" id=\"heading";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60), "html", null, true);
                    yield "\">
              <button class=\"accordion-button";
                    // line 61
                    yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" collapsed") : (""));
                    yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
                    yield "\" aria-expanded=\"";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                    yield "\" aria-controls=\"collapse";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
                    yield "\">
                ";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["rule"], "issue", [], "any", false, false, false, 62)), "html", null, true);
                    yield "
              </button>
            </div>
            <div id=\"collapse";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65), "html", null, true);
                    yield "\" class=\"accordion-collapse collapse";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" show") : (""));
                    yield "\" aria-labelledby=\"heading";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65), "html", null, true);
                    yield "\" data-bs-parent=\"#rulesAccordion\">
              <div class=\"accordion-body\">
                <dl>
                  <dt>";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Issue:"), "html", null, true);
                    yield "</dt>
                  <dd>";
                    // line 69
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["rule"], "issue", [], "any", false, false, false, 69);
                    yield "</dd>

                  <dt>";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Recommendation:"), "html", null, true);
                    yield "</dt>
                  <dd>";
                    // line 72
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["rule"], "recommendation", [], "any", false, false, false, 72);
                    yield "</dd>

                  <dt>";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Justification:"), "html", null, true);
                    yield "</dt>
                  <dd>";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rule"], "justification", [], "any", false, false, false, 75), "html", null, true);
                    yield "</dd>

                  <dt>";
                    // line 77
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Used variable / formula:"), "html", null, true);
                    yield "</dt>
                  <dd>";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rule"], "formula", [], "any", false, false, false, 78), "html", null, true);
                    yield "</dd>

                  <dt>";
                    // line 80
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Test:"), "html", null, true);
                    yield "</dt>
                  <dd>";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rule"], "test", [], "any", false, false, false, 81), "html", null, true);
                    yield "</dd>
                </dl>
              </div>
            </div>
          </div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                yield "      </div>
    ";
            }
            // line 89
            yield "  ";
        }
        // line 90
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/status/advisor/index.twig";
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
        return array (  288 => 90,  285 => 89,  281 => 87,  261 => 81,  257 => 80,  252 => 78,  248 => 77,  243 => 75,  239 => 74,  234 => 72,  230 => 71,  225 => 69,  221 => 68,  211 => 65,  205 => 62,  195 => 61,  191 => 60,  188 => 59,  171 => 58,  164 => 55,  162 => 54,  159 => 53,  154 => 50,  145 => 48,  141 => 47,  136 => 45,  133 => 44,  131 => 43,  122 => 37,  117 => 34,  115 => 33,  112 => 31,  110 => 30,  107 => 28,  105 => 27,  102 => 25,  100 => 24,  94 => 20,  90 => 19,  80 => 12,  77 => 11,  71 => 9,  69 => 8,  64 => 6,  61 => 5,  54 => 4,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'advisor' %}

{% block content %}

  <h2>{{ t('Advisor system') }}</h2>

  {% if data is empty %}
    {{ t('Not enough privilege to view the advisor.')|error }}
  {% else %}
    <button type=\"button\" class=\"btn btn-secondary mb-4\" data-bs-toggle=\"modal\" data-bs-target=\"#advisorInstructionsModal\">
      {{ get_icon('b_help', t('Instructions')) }}
    </button>

    <div class=\"modal fade\" id=\"advisorInstructionsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"advisorInstructionsModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"advisorInstructionsModalLabel\">{{ t('Advisor system') }}</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
          </div>
          <div class=\"modal-body\">
            <p>
              {{- t('The Advisor system can provide recommendations on server variables by analyzing the server status variables.') -}}
            </p>
            <p>
              {{- t('Do note however that this system provides recommendations based on simple calculations and by rule of thumb which may not necessarily apply to your system.') -}}
            </p>
            <p>
              {{- t('Prior to changing any of the configuration, be sure to know what you are changing (by reading the documentation) and how to undo the change. Wrong tuning can have a very negative effect on performance.') -}}
            </p>
            <p>
              {{- t('The best way to tune your system would be to change only one setting at a time, observe or benchmark your database, and undo the change if there was no clearly measurable improvement.') -}}
            </p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
          </div>
        </div>
      </div>
    </div>

    {% if data.errors is defined and data.errors|length > 0 %}
      <div class=\"alert alert-danger mt-2 mb-2\" role=\"alert\">
        <h4 class=\"alert-heading\">{{ t('Errors occurred while executing rule expressions:') }}</h4>
        <ul>
          {% for error in data.errors %}
            <li>{{ error }}</li>
          {% endfor %}
        </ul>
      </div>
    {% endif %}

    {% if data.fired is defined and data.fired|length > 0 %}
      <h4>{{ t('Possible performance issues') }}</h4>

      <div class=\"accordion mb-4\" id=\"rulesAccordion\">
        {% for rule in data.fired %}
          <div class=\"accordion-item\">
            <div class=\"accordion-header\" id=\"heading{{ loop.index }}\">
              <button class=\"accordion-button{{ not loop.first ? ' collapsed' }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse{{ loop.index }}\" aria-expanded=\"{{ loop.first ? 'true' : 'false' }}\" aria-controls=\"collapse{{ loop.index }}\">
                {{ rule.issue|striptags }}
              </button>
            </div>
            <div id=\"collapse{{ loop.index }}\" class=\"accordion-collapse collapse{{ loop.first ? ' show' }}\" aria-labelledby=\"heading{{ loop.index }}\" data-bs-parent=\"#rulesAccordion\">
              <div class=\"accordion-body\">
                <dl>
                  <dt>{{ t('Issue:') }}</dt>
                  <dd>{{ rule.issue|raw }}</dd>

                  <dt>{{ t('Recommendation:') }}</dt>
                  <dd>{{ rule.recommendation|raw }}</dd>

                  <dt>{{ t('Justification:') }}</dt>
                  <dd>{{ rule.justification }}</dd>

                  <dt>{{ t('Used variable / formula:') }}</dt>
                  <dd>{{ rule.formula }}</dd>

                  <dt>{{ t('Test:') }}</dt>
                  <dd>{{ rule.test }}</dd>
                </dl>
              </div>
            </div>
          </div>
        {% endfor %}
      </div>
    {% endif %}
  {% endif %}

{% endblock %}
", "server/status/advisor/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/advisor/index.twig");
    }
}
