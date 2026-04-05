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

/* server/privileges/user_properties.twig */
class __TwigTemplate_ef737e3903163e32470b21842d205912 extends Template
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
        yield "<div class=\"container\" id=\"edit_user_dialog\">
  <h2>
    ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getIcon("b_usredit");
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit privileges:"), "html", null, true);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User account"), "html", null, true);
        yield "

    ";
        // line 7
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 7, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "      <em>
        <a class=\"edit_user_anchor\" href=\"";
            // line 9
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" =>             // line 10
(isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 10, $this->source); })()), "hostname" =>             // line 11
(isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 11, $this->source); })()), "dbname" => "", "tablename" => ""]);
            // line 14
            yield "\">
          '";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 15, $this->source); })()), "html", null, true);
            yield "'@'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 15, $this->source); })()), "html", null, true);
            yield "'
        </a>
      </em>
      -
      ";
            // line 19
            if ((($tmp = (isset($context["is_databases"]) || array_key_exists("is_databases", $context) ? $context["is_databases"] : (function () { throw new RuntimeError('Variable "is_databases" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Databases"), "html", null, true);
                yield "
      ";
            } else {
                // line 22
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
                yield "
      ";
            }
            // line 24
            yield "
      ";
            // line 25
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 25, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "        <em>
          <a href=\"";
                // line 27
                yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" =>                 // line 28
(isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 28, $this->source); })()), "hostname" =>                 // line 29
(isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 29, $this->source); })()), "dbname" =>                 // line 30
(isset($context["dbname"]) || array_key_exists("dbname", $context) ? $context["dbname"] : (function () { throw new RuntimeError('Variable "dbname" does not exist.', 30, $this->source); })()), "tablename" => ""]);
                // line 32
                yield "\">
            ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 33, $this->source); })()), "html", null, true);
                yield "
          </a>
        </em>
        -
        ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
                yield "
        <em>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 38, $this->source); })()), "html", null, true);
                yield "</em>
      ";
            } else {
                // line 40
                yield "        ";
                if ((($tmp =  !is_iterable((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 40, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "          ";
                    $context["database"] = [(isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 41, $this->source); })())];
                    // line 42
                    yield "        ";
                }
                // line 43
                yield "        <em>
          ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 44, $this->source); })()), ", "), "html", null, true);
                yield "
        </em>
      ";
            }
            // line 47
            yield "    ";
        } else {
            // line 48
            yield "      <em>'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 48, $this->source); })()), "html", null, true);
            yield "'@'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 48, $this->source); })()), "html", null, true);
            yield "'</em>
    ";
        }
        // line 50
        yield "  </h2>

  ";
        // line 52
        if (((isset($context["current_user"]) || array_key_exists("current_user", $context) ? $context["current_user"] : (function () { throw new RuntimeError('Variable "current_user" does not exist.', 52, $this->source); })()) == (((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 52, $this->source); })()) . "@") . (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 52, $this->source); })())))) {
            // line 53
            yield "    ";
            yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("Note: You are attempting to edit privileges of the user with which you are currently logged in."));
            yield "
  ";
        }
        // line 55
        yield "
  ";
        // line 56
        if ((($tmp = (isset($context["user_does_not_exists"]) || array_key_exists("user_does_not_exists", $context) ? $context["user_does_not_exists"] : (function () { throw new RuntimeError('Variable "user_does_not_exists" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "    ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("The selected user was not found in the privilege table."));
            yield "
  ";
        }
        // line 59
        yield "
  <form class=\"submenu-item\" name=\"usersForm\" id=\"addUsersForm\" action=\"";
        // line 60
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" method=\"post\">
    ";
        // line 61
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 61, $this->source); })()));
        yield "

    ";
        // line 63
        yield (isset($context["privileges_table"]) || array_key_exists("privileges_table", $context) ? $context["privileges_table"] : (function () { throw new RuntimeError('Variable "privileges_table" does not exist.', 63, $this->source); })());
        yield "
  </form>

  ";
        // line 66
        yield (isset($context["table_specific_rights"]) || array_key_exists("table_specific_rights", $context) ? $context["table_specific_rights"] : (function () { throw new RuntimeError('Variable "table_specific_rights" does not exist.', 66, $this->source); })());
        yield "

  ";
        // line 68
        if ((( !is_iterable((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 68, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 68, $this->source); })())) > 0)) &&  !(isset($context["is_wildcard"]) || array_key_exists("is_wildcard", $context) ? $context["is_wildcard"] : (function () { throw new RuntimeError('Variable "is_wildcard" does not exist.', 68, $this->source); })()))) {
            // line 69
            yield "    [
    ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "
    <a href=\"";
            // line 71
            yield (isset($context["database_url"]) || array_key_exists("database_url", $context) ? $context["database_url"] : (function () { throw new RuntimeError('Variable "database_url" does not exist.', 71, $this->source); })());
            yield PhpMyAdmin\Url::getCommon(["db" => Twig\Extension\CoreExtension::replace(            // line 72
(isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 72, $this->source); })()), ["\\_" => "_", "\\%" => "%"]), "reload" => true], "&");
            // line 74
            yield "\">
      ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 75, $this->source); })()), ["\\_" => "_", "\\%" => "%"]), "html", null, true);
            yield ":
      ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["database_url_title"]) || array_key_exists("database_url_title", $context) ? $context["database_url_title"] : (function () { throw new RuntimeError('Variable "database_url_title" does not exist.', 76, $this->source); })()), "html", null, true);
            yield "
    </a>
    ]
    ";
            // line 79
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 79, $this->source); })())) > 0)) {
                // line 80
                yield "      [
      ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
                yield "
      <a href=\"";
                // line 82
                yield (isset($context["table_url"]) || array_key_exists("table_url", $context) ? $context["table_url"] : (function () { throw new RuntimeError('Variable "table_url" does not exist.', 82, $this->source); })());
                yield PhpMyAdmin\Url::getCommon(["db" => Twig\Extension\CoreExtension::replace(                // line 83
(isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 83, $this->source); })()), ["\\_" => "_", "\\%" => "%"]), "table" =>                 // line 84
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 84, $this->source); })()), "reload" => true], "&");
                // line 86
                yield "\">
        ";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 87, $this->source); })()), "html", null, true);
                yield ":
        ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table_url_title"]) || array_key_exists("table_url_title", $context) ? $context["table_url_title"] : (function () { throw new RuntimeError('Variable "table_url_title" does not exist.', 88, $this->source); })()), "html", null, true);
                yield "
      </a>
      ]
    ";
            }
            // line 92
            yield "  ";
        }
        // line 93
        yield "
  ";
        // line 94
        yield (isset($context["change_password"]) || array_key_exists("change_password", $context) ? $context["change_password"] : (function () { throw new RuntimeError('Variable "change_password" does not exist.', 94, $this->source); })());
        yield "

  <form action=\"";
        // line 96
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" id=\"copyUserForm\" method=\"post\" class=\"copyUserForm submenu-item\" autocomplete=\"off\">
    ";
        // line 97
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
    <input type=\"hidden\" name=\"old_username\" value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"old_hostname\" value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 99, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 100
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["user_group"]) || array_key_exists("user_group", $context) ? $context["user_group"] : (function () { throw new RuntimeError('Variable "user_group" does not exist.', 100, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "      <input type=\"hidden\" name=\"old_usergroup\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_group"]) || array_key_exists("user_group", $context) ? $context["user_group"] : (function () { throw new RuntimeError('Variable "user_group" does not exist.', 101, $this->source); })()), "html", null, true);
            yield "\">
    ";
        }
        // line 103
        yield "
    <div class=\"card mb-3\">
      <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Login Information"), "html", null, true);
        yield "\">
        ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Change login information / Copy user account"), "html", null, true);
        yield "
      </div>

      <div class=\"card-body\">
        ";
        // line 110
        yield (isset($context["change_login_info_fields"]) || array_key_exists("change_login_info_fields", $context) ? $context["change_login_info_fields"] : (function () { throw new RuntimeError('Variable "change_login_info_fields" does not exist.', 110, $this->source); })());
        yield "

        <div class=\"card\">
          <div class=\"card-header\">
            ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create a new user account with the same privileges and …"), "html", null, true);
        yield "
          </div>

          <div class=\"card-body\">

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_4\" value=\"4\" checked>
              <label class=\"form-check-label\" for=\"mode_4\">
                ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("… keep the old one."), "html", null, true);
        yield "
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_1\" value=\"1\">
              <label class=\"form-check-label\" for=\"mode_1\">
                ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("… delete the old one from the user tables."), "html", null, true);
        yield "
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_2\" value=\"2\">
              <label class=\"form-check-label\" for=\"mode_2\">
                ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("… revoke all active privileges from the old one and delete it afterwards."), "html", null, true);
        yield "
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_3\" value=\"3\">
              <label class=\"form-check-label\" for=\"mode_3\">
                ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("… delete the old one from the user tables and reload the privileges afterwards."), "html", null, true);
        yield "
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <input type=\"hidden\" name=\"change_copy\" value=\"1\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
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
        return "server/privileges/user_properties.twig";
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
        return array (  366 => 153,  353 => 143,  343 => 136,  333 => 129,  323 => 122,  312 => 114,  305 => 110,  298 => 106,  294 => 105,  290 => 103,  284 => 101,  282 => 100,  278 => 99,  274 => 98,  270 => 97,  266 => 96,  261 => 94,  258 => 93,  255 => 92,  248 => 88,  244 => 87,  241 => 86,  239 => 84,  238 => 83,  236 => 82,  232 => 81,  229 => 80,  227 => 79,  221 => 76,  217 => 75,  214 => 74,  212 => 72,  210 => 71,  206 => 70,  203 => 69,  201 => 68,  196 => 66,  190 => 63,  185 => 61,  181 => 60,  178 => 59,  172 => 57,  170 => 56,  167 => 55,  161 => 53,  159 => 52,  155 => 50,  147 => 48,  144 => 47,  138 => 44,  135 => 43,  132 => 42,  129 => 41,  126 => 40,  121 => 38,  117 => 37,  110 => 33,  107 => 32,  105 => 30,  104 => 29,  103 => 28,  102 => 27,  99 => 26,  97 => 25,  94 => 24,  88 => 22,  82 => 20,  80 => 19,  71 => 15,  68 => 14,  66 => 11,  65 => 10,  64 => 9,  61 => 8,  59 => 7,  54 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\" id=\"edit_user_dialog\">
  <h2>
    {{ get_icon('b_usredit') }}
    {{ t('Edit privileges:') }}
    {{ t('User account') }}

    {% if database is not empty %}
      <em>
        <a class=\"edit_user_anchor\" href=\"{{ url('/server/privileges', {
          'username': username,
          'hostname': hostname,
          'dbname': '',
          'tablename': ''
        }) }}\">
          '{{ username }}'@'{{ hostname }}'
        </a>
      </em>
      -
      {% if is_databases %}
        {{ t('Databases') }}
      {% else %}
        {{ t('Database') }}
      {% endif %}

      {% if table is not empty %}
        <em>
          <a href=\"{{ url('/server/privileges', {
            'username': username,
            'hostname': hostname,
            'dbname': dbname,
            'tablename': ''
          }) }}\">
            {{ database }}
          </a>
        </em>
        -
        {{ t('Table') }}
        <em>{{ table }}</em>
      {% else %}
        {% if database is not iterable %}
          {% set database = [database] %}
        {% endif %}
        <em>
          {{ database|join(', ') }}
        </em>
      {% endif %}
    {% else %}
      <em>'{{ username }}'@'{{ hostname }}'</em>
    {% endif %}
  </h2>

  {% if current_user == username ~ '@' ~ hostname %}
    {{ t('Note: You are attempting to edit privileges of the user with which you are currently logged in.')|notice }}
  {% endif %}

  {% if user_does_not_exists %}
    {{ t('The selected user was not found in the privilege table.')|error }}
  {% endif %}

  <form class=\"submenu-item\" name=\"usersForm\" id=\"addUsersForm\" action=\"{{ url('/server/privileges') }}\" method=\"post\">
    {{ get_hidden_inputs(params) }}

    {{ privileges_table|raw }}
  </form>

  {{ table_specific_rights|raw }}

  {% if database is not iterable and database|length > 0 and not is_wildcard %}
    [
    {{ t('Database') }}
    <a href=\"{{ database_url|raw }}{{ get_common({
      'db': database|replace({'\\\\_': '_', '\\\\%': '%'}),
      'reload': true
    }, '&') }}\">
      {{ database|replace({'\\\\_': '_', '\\\\%': '%'}) }}:
      {{ database_url_title }}
    </a>
    ]
    {% if table|length > 0 %}
      [
      {{ t('Table') }}
      <a href=\"{{ table_url|raw }}{{ get_common({
        'db': database|replace({'\\\\_': '_', '\\\\%': '%'}),
        'table': table,
        'reload': true
      }, '&') }}\">
        {{ table }}:
        {{ table_url_title }}
      </a>
      ]
    {% endif %}
  {% endif %}

  {{ change_password|raw }}

  <form action=\"{{ url('/server/privileges') }}\" id=\"copyUserForm\" method=\"post\" class=\"copyUserForm submenu-item\" autocomplete=\"off\">
    {{ get_hidden_inputs() }}
    <input type=\"hidden\" name=\"old_username\" value=\"{{ username }}\">
    <input type=\"hidden\" name=\"old_hostname\" value=\"{{ hostname }}\">
    {% if user_group is not empty %}
      <input type=\"hidden\" name=\"old_usergroup\" value=\"{{ user_group }}\">
    {% endif %}

    <div class=\"card mb-3\">
      <div class=\"card-header js-submenu-label\" data-submenu-label=\"{{ t('Login Information') }}\">
        {{ t('Change login information / Copy user account') }}
      </div>

      <div class=\"card-body\">
        {{ change_login_info_fields|raw }}

        <div class=\"card\">
          <div class=\"card-header\">
            {{ t('Create a new user account with the same privileges and …') }}
          </div>

          <div class=\"card-body\">

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_4\" value=\"4\" checked>
              <label class=\"form-check-label\" for=\"mode_4\">
                {{ t('… keep the old one.') }}
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_1\" value=\"1\">
              <label class=\"form-check-label\" for=\"mode_1\">
                {{ t('… delete the old one from the user tables.') }}
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_2\" value=\"2\">
              <label class=\"form-check-label\" for=\"mode_2\">
                {{ t('… revoke all active privileges from the old one and delete it afterwards.') }}
              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_3\" value=\"3\">
              <label class=\"form-check-label\" for=\"mode_3\">
                {{ t('… delete the old one from the user tables and reload the privileges afterwards.') }}
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <input type=\"hidden\" name=\"change_copy\" value=\"1\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
    </div>
  </form>
</div>
", "server/privileges/user_properties.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/user_properties.twig");
    }
}
