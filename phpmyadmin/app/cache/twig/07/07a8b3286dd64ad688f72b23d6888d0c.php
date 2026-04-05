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

/* server/privileges/add_user.twig */
class __TwigTemplate_5a689cae587eeebd698153127f0f1ac2 extends Template
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
        yield "<div class=\"container\">
<h2>
  ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getIcon("b_usradd");
        yield "
  ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add user account"), "html", null, true);
        yield "
</h2>

<form name=\"usersForm\" id=\"addUsersForm\" action=\"";
        // line 7
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" method=\"post\" autocomplete=\"off\">
  ";
        // line 8
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "

  ";
        // line 10
        yield (isset($context["login_information_fields_new"]) || array_key_exists("login_information_fields_new", $context) ? $context["login_information_fields_new"] : (function () { throw new RuntimeError('Variable "login_information_fields_new" does not exist.', 10, $this->source); })());
        yield "

  <div class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database for user account"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <input type=\"checkbox\" name=\"createdb-1\" id=\"createdb-1\">
      <label for=\"createdb-1\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create database with same name and grant all privileges."), "html", null, true);
        yield "</label>
      <br>

      <input type=\"checkbox\" name=\"createdb-2\" id=\"createdb-2\">
      <label for=\"createdb-2\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Grant all privileges on wildcard name (username\\_%)."), "html", null, true);
        yield "</label>
      <br>

      ";
        // line 23
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 23, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "        <input type=\"checkbox\" name=\"createdb-3\" id=\"createdb-3\" checked>
        <label for=\"createdb-3\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Grant all privileges on database %s."), (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 25, $this->source); })())), "html", null, true);
            yield "</label>
        <input type=\"hidden\" name=\"dbname\" value=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 26, $this->source); })()), "html", null, true);
            yield "\">
        <br>
      ";
        }
        // line 29
        yield "    </div>
  </div>

  ";
        // line 32
        if ((($tmp = (isset($context["is_grant_user"]) || array_key_exists("is_grant_user", $context) ? $context["is_grant_user"] : (function () { throw new RuntimeError('Variable "is_grant_user" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "    ";
            yield (isset($context["privileges_table"]) || array_key_exists("privileges_table", $context) ? $context["privileges_table"] : (function () { throw new RuntimeError('Variable "privileges_table" does not exist.', 33, $this->source); })());
            yield "
  ";
        }
        // line 35
        yield "
  <div>
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create user"), "html", null, true);
        yield "\">
  </div>
</form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/add_user.twig";
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
        return array (  123 => 38,  118 => 35,  112 => 33,  110 => 32,  105 => 29,  99 => 26,  95 => 25,  92 => 24,  90 => 23,  84 => 20,  77 => 16,  71 => 13,  65 => 10,  60 => 8,  56 => 7,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
<h2>
  {{ get_icon('b_usradd') }}
  {{ t('Add user account') }}
</h2>

<form name=\"usersForm\" id=\"addUsersForm\" action=\"{{ url('/server/privileges') }}\" method=\"post\" autocomplete=\"off\">
  {{ get_hidden_inputs() }}

  {{ login_information_fields_new|raw }}

  <div class=\"card mb-3\">
    <div class=\"card-header\">{{ t('Database for user account') }}</div>
    <div class=\"card-body\">
      <input type=\"checkbox\" name=\"createdb-1\" id=\"createdb-1\">
      <label for=\"createdb-1\">{{ t('Create database with same name and grant all privileges.') }}</label>
      <br>

      <input type=\"checkbox\" name=\"createdb-2\" id=\"createdb-2\">
      <label for=\"createdb-2\">{{ t('Grant all privileges on wildcard name (username\\\\_%).') }}</label>
      <br>

      {% if database is not empty %}
        <input type=\"checkbox\" name=\"createdb-3\" id=\"createdb-3\" checked>
        <label for=\"createdb-3\">{{ t('Grant all privileges on database %s.')|format(database) }}</label>
        <input type=\"hidden\" name=\"dbname\" value=\"{{ database }}\">
        <br>
      {% endif %}
    </div>
  </div>

  {% if is_grant_user %}
    {{ privileges_table|raw }}
  {% endif %}

  <div>
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"{{ t('Create user') }}\">
  </div>
</form>
</div>
", "server/privileges/add_user.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/add_user.twig");
    }
}
