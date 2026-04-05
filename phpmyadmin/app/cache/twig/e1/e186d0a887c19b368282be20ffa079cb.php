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

/* server/status/processes/index.twig */
class __TwigTemplate_c51e7f9fc00aaf0e85b3d2af194520d1 extends Template
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
        $context["active"] = "processes";
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
<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Filters"), "html", null, true);
        yield "</div>
  <div class=\"card-body\">
    <form action=\"";
        // line 8
        yield PhpMyAdmin\Url::getFromRoute("/server/status/processes");
        yield "\" method=\"post\" class=\"row row-cols-lg-auto gy-1 gx-3 align-items-center\">
      ";
        // line 9
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 9, $this->source); })()));
        yield "

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input autosubmit\" type=\"checkbox\" name=\"showExecuting\" id=\"showExecuting\"";
        // line 13
        yield (((($tmp = (isset($context["is_checked"]) || array_key_exists("is_checked", $context) ? $context["is_checked"] : (function () { throw new RuntimeError('Variable "is_checked" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"showExecuting\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show only active"), "html", null, true);
        yield "</label>
        </div>
      </div>

      <div class=\"col-12\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Refresh"), "html", null, true);
        yield "\">
      </div>
    </form>
  </div>
</div>

";
        // line 25
        yield (isset($context["server_process_list"]) || array_key_exists("server_process_list", $context) ? $context["server_process_list"] : (function () { throw new RuntimeError('Variable "server_process_list" does not exist.', 25, $this->source); })());
        yield "

<div class=\"row\">
";
        // line 28
        yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("Note: Enabling the auto refresh here might cause heavy traffic between the web server and the MySQL server."));
        yield "
</div>

<div class=\"tabLinks row\">
  <label>
    ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Refresh rate"), "html", null, true);
        yield ":

    <select id=\"id_refreshRate\" class=\"refreshRate\" name=\"refreshRate\">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([2, 3, 4, 5, 10, 20, 40, 60, 120, 300, 600, 1200]);
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 37
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rate"], "html", null, true);
            yield "\"";
            yield ((($context["rate"] == 5)) ? (" selected") : (""));
            yield ">
          ";
            // line 38
            if (($context["rate"] < 60)) {
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_ngettext("%d second", "%d seconds", $context["rate"]), $context["rate"]), "html", null, true);
            } else {
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_ngettext("%d minute", "%d minutes", ($context["rate"] / 60)), ($context["rate"] / 60)), "html", null, true);
            }
            // line 43
            yield "        </option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rate'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "    </select>
  </label>
  <a id=\"toggleRefresh\" href=\"#\">
    ";
        // line 48
        yield PhpMyAdmin\Html\Generator::getImage("play");
        yield "
    ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Start auto refresh"), "html", null, true);
        yield "
  </a>
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/status/processes/index.twig";
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
        return array (  157 => 49,  153 => 48,  148 => 45,  141 => 43,  138 => 41,  135 => 39,  133 => 38,  126 => 37,  122 => 36,  116 => 33,  108 => 28,  102 => 25,  93 => 19,  85 => 14,  81 => 13,  74 => 9,  70 => 8,  65 => 6,  61 => 4,  54 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'processes' %}
{% block content %}

<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">{{ t('Filters') }}</div>
  <div class=\"card-body\">
    <form action=\"{{ url('/server/status/processes') }}\" method=\"post\" class=\"row row-cols-lg-auto gy-1 gx-3 align-items-center\">
      {{ get_hidden_inputs(url_params) }}

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input autosubmit\" type=\"checkbox\" name=\"showExecuting\" id=\"showExecuting\"{{ is_checked ? ' checked' }}>
          <label class=\"form-check-label\" for=\"showExecuting\">{{ t('Show only active') }}</label>
        </div>
      </div>

      <div class=\"col-12\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"{{ t('Refresh') }}\">
      </div>
    </form>
  </div>
</div>

{{ server_process_list|raw }}

<div class=\"row\">
{{ t('Note: Enabling the auto refresh here might cause heavy traffic between the web server and the MySQL server.')|notice }}
</div>

<div class=\"tabLinks row\">
  <label>
    {{ t('Refresh rate') }}:

    <select id=\"id_refreshRate\" class=\"refreshRate\" name=\"refreshRate\">
      {% for rate in [2, 3, 4, 5, 10, 20, 40, 60, 120, 300, 600, 1200] %}
        <option value=\"{{ rate }}\"{{ rate == 5 ? ' selected' }}>
          {% if rate < 60 %}
            {{- t('%d second', '%d seconds', rate)|format(rate) -}}
          {% else %}
            {{- t('%d minute', '%d minutes', rate / 60)|format(rate / 60) -}}
          {% endif %}
        </option>
      {% endfor %}
    </select>
  </label>
  <a id=\"toggleRefresh\" href=\"#\">
    {{ get_image('play') }}
    {{ t('Start auto refresh') }}
  </a>
</div>

{% endblock %}
", "server/status/processes/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/processes/index.twig");
    }
}
