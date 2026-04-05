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

/* server/replication/primary_replication.twig */
class __TwigTemplate_6bcac1af77f9eb7f6f9a9caefda85403 extends Template
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
        if ((($tmp =  !(isset($context["clear_screen"]) || array_key_exists("clear_screen", $context) ? $context["clear_screen"] : (function () { throw new RuntimeError('Variable "clear_screen" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Primary replication"), "html", null, true);
            yield "</div>
    <div class=\"card-body\">
    ";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("This server is configured as primary in a replication process."), "html", null, true);
            yield "
    <ul>
      <li>
        <a href=\"#primary_status_href\" id=\"primary_status_href\">
          ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show primary status"), "html", null, true);
            yield "
        </a>
        ";
            // line 11
            yield (isset($context["primary_status_table"]) || array_key_exists("primary_status_table", $context) ? $context["primary_status_table"] : (function () { throw new RuntimeError('Variable "primary_status_table" does not exist.', 11, $this->source); })());
            yield "
      </li>
      <li>
        <p>
          <a href=\"#primary_replicas_href\" id=\"primary_replicas_href\">
            ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show connected replicas"), "html", null, true);
            yield "
          </a>
        </p>

        <div id=\"replication_replicas_section\" style=\"display: none;\">
          <table class=\"table w-auto\">
            <thead>
              <tr>
                <th>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server ID"), "html", null, true);
            yield "</th>
                <th>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host"), "html", null, true);
            yield "</th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["replicas"]) || array_key_exists("replicas", $context) ? $context["replicas"] : (function () { throw new RuntimeError('Variable "replicas" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["replica"]) {
                // line 30
                yield "                <tr>
                  <td class=\"text-end font-monospace\">";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["replica"], "Server_id", [], "array", false, false, false, 31), "html", null, true);
                yield "</td>
                  <td class=\"text-end font-monospace\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["replica"], "Host", [], "array", false, false, false, 32), "html", null, true);
                yield "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['replica'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "            </tbody>
          </table>
          <br>
          ";
            // line 38
            yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("Only replicas started with the --report-host=host_name option are visible in this list."));
            yield "
          <br>
        </div>
      </li>
      <li>
        <a href=\"";
            // line 43
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 43, $this->source); })()), "");
            yield "\" id=\"primary_addreplicauser_href\">
          ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add replica replication user"), "html", null, true);
            yield "
        </a>
      </li>
";
        }
        // line 48
        if ((($tmp = (isset($context["primary_add_user"]) || array_key_exists("primary_add_user", $context) ? $context["primary_add_user"] : (function () { throw new RuntimeError('Variable "primary_add_user" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "    ";
            yield (isset($context["primary_add_replica_user"]) || array_key_exists("primary_add_replica_user", $context) ? $context["primary_add_replica_user"] : (function () { throw new RuntimeError('Variable "primary_add_replica_user" does not exist.', 49, $this->source); })());
            yield "
";
        } elseif ((($tmp =  !        // line 50
(isset($context["clear_screen"]) || array_key_exists("clear_screen", $context) ? $context["clear_screen"] : (function () { throw new RuntimeError('Variable "clear_screen" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "    </ul>
    </div>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/replication/primary_replication.twig";
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
        return array (  149 => 51,  147 => 50,  142 => 49,  140 => 48,  133 => 44,  127 => 43,  119 => 38,  114 => 35,  105 => 32,  101 => 31,  98 => 30,  94 => 29,  87 => 25,  83 => 24,  72 => 16,  64 => 11,  59 => 9,  52 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if not clear_screen %}
  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Primary replication') }}</div>
    <div class=\"card-body\">
    {{ t('This server is configured as primary in a replication process.') }}
    <ul>
      <li>
        <a href=\"#primary_status_href\" id=\"primary_status_href\">
          {{ t('Show primary status') }}
        </a>
        {{ primary_status_table|raw }}
      </li>
      <li>
        <p>
          <a href=\"#primary_replicas_href\" id=\"primary_replicas_href\">
            {{ t('Show connected replicas') }}
          </a>
        </p>

        <div id=\"replication_replicas_section\" style=\"display: none;\">
          <table class=\"table w-auto\">
            <thead>
              <tr>
                <th>{{ t('Server ID') }}</th>
                <th>{{ t('Host') }}</th>
              </tr>
            </thead>
            <tbody>
              {% for replica in replicas %}
                <tr>
                  <td class=\"text-end font-monospace\">{{ replica['Server_id'] }}</td>
                  <td class=\"text-end font-monospace\">{{ replica['Host'] }}</td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
          <br>
          {{ t('Only replicas started with the --report-host=host_name option are visible in this list.')|notice }}
          <br>
        </div>
      </li>
      <li>
        <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ get_common(url_params, '') }}\" id=\"primary_addreplicauser_href\">
          {{ t('Add replica replication user') }}
        </a>
      </li>
{% endif %}
{% if primary_add_user %}
    {{ primary_add_replica_user|raw }}
{% elseif not clear_screen %}
    </ul>
    </div>
  </div>
{% endif %}
", "server/replication/primary_replication.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/primary_replication.twig");
    }
}
