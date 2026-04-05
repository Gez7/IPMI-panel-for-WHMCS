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

/* server/select/index.twig */
class __TwigTemplate_64874314fa9e9140ff3a5b40fb928859 extends Template
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
        if ((($tmp = (isset($context["not_only_options"]) || array_key_exists("not_only_options", $context) ? $context["not_only_options"] : (function () { throw new RuntimeError('Variable "not_only_options" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <form class=\"disableAjax\" method=\"post\" action=\"";
            yield (isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 2, $this->source); })());
            yield "\">
        ";
            // line 3
            yield PhpMyAdmin\Url::getHiddenFields([]);
            yield "
        <label for=\"select_server\" class=\"form-label\">";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Current server:"), "html", null, true);
            yield "</label>
        <select id=\"select_server\" class=\"form-select autosubmit\" name=\"server\">
            <option value=\"\">(";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Servers"), "html", null, true);
            yield ") ...</option>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 7, $this->source); })()), "select", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 8
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "value", [], "any", false, false, false, 8), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["server"], "selected", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 8), "html", null, true);
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            yield "        </select>
    </form>
";
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 12, $this->source); })()), "list", [], "any", false, false, false, 12))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Current server:"), "html", null, true);
            yield "<br>
    <ul id=\"list_server\">
        <li>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 16, $this->source); })()), "list", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 17
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["server"], "selected", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 18
                    yield "                    <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 18), "html", null, true);
                    yield "</strong>
                ";
                } else {
                    // line 20
                    yield "                    <a class=\"disableAjax item\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "href", [], "any", false, false, false, 20), "html", null, true);
                    yield "\">";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 21), "html", null, true);
                    // line 22
                    yield "</a>
                ";
                }
                // line 24
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "        </li>
    </ul>
";
        } else {
            // line 28
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 28, $this->source); })()), "select", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 29
                yield "    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "value", [], "any", false, false, false, 29), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["server"], "selected", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 29), "html", null, true);
                yield "</option>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/select/index.twig";
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
        return array (  131 => 29,  126 => 28,  121 => 25,  115 => 24,  111 => 22,  109 => 21,  105 => 20,  99 => 18,  96 => 17,  92 => 16,  85 => 13,  83 => 12,  79 => 10,  66 => 8,  62 => 7,  58 => 6,  53 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if not_only_options %}
    <form class=\"disableAjax\" method=\"post\" action=\"{{ form_action|raw }}\">
        {{ get_hidden_fields([]) }}
        <label for=\"select_server\" class=\"form-label\">{{ t('Current server:') }}</label>
        <select id=\"select_server\" class=\"form-select autosubmit\" name=\"server\">
            <option value=\"\">({{ t('Servers') }}) ...</option>
            {% for server in servers.select %}
              <option value=\"{{ server.value }}\"{{ server.selected ? ' selected' }}>{{ server.label }}</option>
            {% endfor %}
        </select>
    </form>
{% elseif servers.list is not empty %}
    {{ t('Current server:') }}<br>
    <ul id=\"list_server\">
        <li>
            {% for server in servers.list %}
                {% if server.selected %}
                    <strong>{{ server.label }}</strong>
                {% else %}
                    <a class=\"disableAjax item\" href=\"{{ server.href }}\">
                        {{- server.label -}}
                    </a>
                {% endif %}
            {% endfor %}
        </li>
    </ul>
{% else %}
  {% for server in servers.select %}
    <option value=\"{{ server.value }}\"{{ server.selected ? ' selected' }}>{{ server.label }}</option>
  {% endfor %}
{% endif %}
", "server/select/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/select/index.twig");
    }
}
