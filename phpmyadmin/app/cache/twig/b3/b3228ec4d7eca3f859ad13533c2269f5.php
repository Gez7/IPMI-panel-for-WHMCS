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

/* server/engines/show.twig */
class __TwigTemplate_bb98742c044ca2c8dca394375ecaeae7 extends Template
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
        yield "<h2>
  ";
        // line 2
        yield PhpMyAdmin\Html\Generator::getImage("b_engine");
        yield "
  ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage engines"), "html", null, true);
        yield "
</h2>

";
        // line 6
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 6, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "  <h2>
    ";
            // line 8
            yield PhpMyAdmin\Html\Generator::getImage("b_engine");
            yield "
    ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
            yield "
    ";
            // line 10
            yield PhpMyAdmin\Html\MySQLDocumentation::show(CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 10, $this->source); })()), "help_page", [], "any", false, false, false, 10));
            yield "
  </h2>
  <p><em>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 12, $this->source); })()), "comment", [], "any", false, false, false, 12), "html", null, true);
            yield "</em></p>

  ";
            // line 14
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 14, $this->source); })()), "info_pages", [], "any", false, false, false, 14)) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 14, $this->source); })()), "info_pages", [], "any", false, false, false, 14)))) {
                // line 15
                yield "    <p>
      <strong>[</strong>
      ";
                // line 17
                if (Twig\Extension\CoreExtension::testEmpty((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()))) {
                    // line 18
                    yield "        <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Variables"), "html", null, true);
                    yield "</strong>
      ";
                } else {
                    // line 20
                    yield "        <a href=\"";
                    yield PhpMyAdmin\Url::getFromRoute(("/server/engines/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 20, $this->source); })()), "engine", [], "any", false, false, false, 20)));
                    yield "\">
          ";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Variables"), "html", null, true);
                    yield "
        </a>
      ";
                }
                // line 24
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 24, $this->source); })()), "info_pages", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["current"] => $context["label"]) {
                    // line 25
                    yield "        <strong>|</strong>
        ";
                    // line 26
                    if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()) == $context["current"]))) {
                        // line 27
                        yield "          <strong>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                        yield "</strong>
        ";
                    } else {
                        // line 29
                        yield "          <a href=\"";
                        yield PhpMyAdmin\Url::getFromRoute(((("/server/engines/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 29, $this->source); })()), "engine", [], "any", false, false, false, 29)) . "/") . $context["current"]));
                        yield "\">
            ";
                        // line 30
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                        yield "
          </a>
        ";
                    }
                    // line 33
                    yield "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['current'], $context['label'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                yield "      <strong>]</strong>
    </p>
  ";
            }
            // line 37
            yield "
  ";
            // line 38
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 38, $this->source); })()), "page", [], "any", false, false, false, 38))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                yield "    ";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 39, $this->source); })()), "page", [], "any", false, false, false, 39);
                yield "
  ";
            } else {
                // line 41
                yield "    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 41, $this->source); })()), "support", [], "any", false, false, false, 41), "html", null, true);
                yield "</p>
    ";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["engine"]) || array_key_exists("engine", $context) ? $context["engine"] : (function () { throw new RuntimeError('Variable "engine" does not exist.', 42, $this->source); })()), "variables", [], "any", false, false, false, 42);
                yield "
  ";
            }
        } else {
            // line 45
            yield "  <p>";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Unknown storage engine."));
            yield "</p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/engines/show.twig";
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
        return array (  163 => 45,  157 => 42,  152 => 41,  146 => 39,  144 => 38,  141 => 37,  136 => 34,  130 => 33,  124 => 30,  119 => 29,  113 => 27,  111 => 26,  108 => 25,  103 => 24,  97 => 21,  92 => 20,  86 => 18,  84 => 17,  80 => 15,  78 => 14,  73 => 12,  68 => 10,  64 => 9,  60 => 8,  57 => 7,  55 => 6,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h2>
  {{ get_image('b_engine') }}
  {{ t('Storage engines') }}
</h2>

{% if engine is not empty %}
  <h2>
    {{ get_image('b_engine') }}
    {{ engine.title }}
    {{ show_mysql_docu(engine.help_page) }}
  </h2>
  <p><em>{{ engine.comment }}</em></p>

  {% if engine.info_pages is not empty and engine.info_pages is iterable %}
    <p>
      <strong>[</strong>
      {% if page is empty %}
        <strong>{{ t('Variables') }}</strong>
      {% else %}
        <a href=\"{{ url('/server/engines/' ~ engine.engine) }}\">
          {{ t('Variables') }}
        </a>
      {% endif %}
      {% for current, label in engine.info_pages %}
        <strong>|</strong>
        {% if page is defined and page == current %}
          <strong>{{ label }}</strong>
        {% else %}
          <a href=\"{{ url('/server/engines/' ~ engine.engine ~ '/' ~ current) }}\">
            {{ label }}
          </a>
        {% endif %}
      {% endfor %}
      <strong>]</strong>
    </p>
  {% endif %}

  {% if engine.page is not empty %}
    {{ engine.page|raw }}
  {% else %}
    <p>{{ engine.support }}</p>
    {{ engine.variables|raw }}
  {% endif %}
{% else %}
  <p>{{ t('Unknown storage engine.')|error }}</p>
{% endif %}
", "server/engines/show.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/engines/show.twig");
    }
}
