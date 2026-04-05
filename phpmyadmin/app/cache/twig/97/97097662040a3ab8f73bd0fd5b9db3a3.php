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

/* relation/check_relations.twig */
class __TwigTemplate_244e5ddbcb18061ff3866deaad971263 extends Template
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
  <h1 class=\"my-3\">
    ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin configuration storage"), "html", null, true);
        yield "
    ";
        // line 4
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("setup", "phpmyadmin-configuration-storage");
        yield "
  </h1>

  ";
        // line 7
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 7, $this->source); })()), "db", [], "any", false, false, false, 7))) {
            // line 8
            yield "    <p>
      ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Configuration of pmadb…"), "html", null, true);
            yield "
      <span class=\"text-danger\"><strong>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
            yield "</strong></span>
      ";
            // line 11
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("setup", "phpmyadmin-configuration-storage");
            yield "
    </p>
    <p>
      ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("General relation features"), "html", null, true);
            yield "
      <span class=\"text-danger\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
            yield "</span>
    </p>
    ";
            // line 17
            if ((($tmp = (isset($context["zero_conf"]) || array_key_exists("zero_conf", $context) ? $context["zero_conf"] : (function () { throw new RuntimeError('Variable "zero_conf" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "      ";
                if (((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 18, $this->source); })()) == "")) {
                    // line 19
                    yield "        ";
                    $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 20
                        yield "          ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("%sCreate%s a database named '%s' and setup the phpMyAdmin configuration storage there."), "html", null, true);
                        yield "
        ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 19
                    yield PhpMyAdmin\Twig\MessageExtension::getNotice(Twig\Extension\CoreExtension::sprintf($_v0, (((("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/check-relations")) . "\" data-post=\"") . PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 19, $this->source); })()), "create_pmadb" => true, "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations")])) . "\">"), "</a>", (isset($context["config_storage_database_name"]) || array_key_exists("config_storage_database_name", $context) ? $context["config_storage_database_name"] : (function () { throw new RuntimeError('Variable "config_storage_database_name" does not exist.', 19, $this->source); })())));
                    // line 22
                    yield "      ";
                } else {
                    // line 23
                    yield "        ";
                    $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 24
                        yield "          ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("%sCreate%s the phpMyAdmin configuration storage in the current database."), "html", null, true);
                        yield "
        ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 23
                    yield PhpMyAdmin\Twig\MessageExtension::getNotice(Twig\Extension\CoreExtension::sprintf($_v1, (((("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/check-relations")) . "\" data-post=\"") . PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 23, $this->source); })()), "fixall_pmadb" => true, "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations")])) . "\">"), "</a>"));
                    // line 26
                    yield "      ";
                }
                // line 27
                yield "    ";
            }
            // line 28
            yield "  ";
        } else {
            // line 29
            yield "    ";
            if ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 29, $this->source); })()), "allworks", [], "any", false, false, false, 29) && (isset($context["zero_conf"]) || array_key_exists("zero_conf", $context) ? $context["zero_conf"] : (function () { throw new RuntimeError('Variable "zero_conf" does not exist.', 29, $this->source); })())) && (isset($context["are_config_storage_tables_defined"]) || array_key_exists("are_config_storage_tables_defined", $context) ? $context["are_config_storage_tables_defined"] : (function () { throw new RuntimeError('Variable "are_config_storage_tables_defined" does not exist.', 29, $this->source); })()))) {
                // line 30
                yield "      ";
                $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 31
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("%sCreate%s missing phpMyAdmin configuration storage tables."), "html", null, true);
                    yield "
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 30
                yield PhpMyAdmin\Twig\MessageExtension::getNotice(Twig\Extension\CoreExtension::sprintf($_v2, (((("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/check-relations")) . "\" data-post=\"") . PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 30, $this->source); })()), "fix_pmadb" => true, "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations")])) . "\">"), "</a>"));
                // line 33
                yield "    ";
            }
            // line 34
            yield "
    <table class=\"table table-striped\">
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['pmadb']</code>
          ";
            // line 39
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_pmadb");
            yield "
        </th>
        <td class=\"text-end\">
          <span class=\"text-success\"><strong>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
            yield "</strong></span>
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['relation']</code>
          ";
            // line 50
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_relation");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 53
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 53, $this->source); })()), "relation", [], "any", false, false, false, 53))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 56
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 58
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("General relation features:"), "html", null, true);
            yield "
          ";
            // line 63
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 63, $this->source); })()), "relwork", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 66
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 68
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_info']</code>
          ";
            // line 75
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_table_info");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 78
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 78, $this->source); })()), "table_info", [], "any", false, false, false, 78))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 79
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 81
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 83
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Display features:"), "html", null, true);
            yield "
          ";
            // line 88
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 88, $this->source); })()), "displaywork", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 89
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 91
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 93
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_coords']</code>
          ";
            // line 100
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_table_coords");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 103
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 103, $this->source); })()), "table_coords", [], "any", false, false, false, 103))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 104
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 106
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 108
            yield "        </td>
      </tr>
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['pdf_pages']</code>
          ";
            // line 113
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_pdf_pages");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 116
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 116, $this->source); })()), "pdf_pages", [], "any", false, false, false, 116))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 119
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 121
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Designer and creation of PDFs:"), "html", null, true);
            yield "
          ";
            // line 126
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 126, $this->source); })()), "pdfwork", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 127
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 129
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 131
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['column_info']</code>
          ";
            // line 138
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_column_info");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 141
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 141, $this->source); })()), "column_info", [], "any", false, false, false, 141))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 144
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 146
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Displaying column comments:"), "html", null, true);
            yield "
          ";
            // line 151
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 151, $this->source); })()), "commwork", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 152
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 154
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 156
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browser transformation:"), "html", null, true);
            yield "
          ";
            // line 161
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 161, $this->source); })()), "mimework", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 162
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 164
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 166
            yield "        </td>
      </tr>
      ";
            // line 168
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 168, $this->source); })()), "commwork", [], "any", false, false, false, 168) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 168, $this->source); })()), "mimework", [], "any", false, false, false, 168))) {
                // line 169
                yield "        <tr>
          <td colspan=\"2\" class=\"text-end\">
            <span class=\"text-danger\">
              ";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Please see the documentation on how to update your column_info table."), "html", null, true);
                yield "
              ";
                // line 173
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_column_info");
                yield "
            </span>
          </td>
        </tr>
      ";
            }
            // line 178
            yield "      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['bookmarktable']</code>
          ";
            // line 183
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_bookmarktable");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 186
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 186, $this->source); })()), "bookmark", [], "any", false, false, false, 186))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 187
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 189
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 191
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Bookmarked SQL query:"), "html", null, true);
            yield "
          ";
            // line 196
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 196, $this->source); })()), "bookmarkwork", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 197
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 199
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 201
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['history']</code>
          ";
            // line 208
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_history");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 211
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 211, $this->source); })()), "history", [], "any", false, false, false, 211))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 212
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 214
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 216
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("SQL history:"), "html", null, true);
            yield "
          ";
            // line 221
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 221, $this->source); })()), "historywork", [], "any", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 222
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 224
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 226
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['recent']</code>
          ";
            // line 233
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_recent");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 236
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 236, $this->source); })()), "recent", [], "any", false, false, false, 236))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 237
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 239
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 241
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Persistent recently used tables:"), "html", null, true);
            yield "
          ";
            // line 246
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 246, $this->source); })()), "recentwork", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 249
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 251
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['favorite']</code>
          ";
            // line 258
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_favorite");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 261
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 261, $this->source); })()), "favorite", [], "any", false, false, false, 261))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 262
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 264
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 266
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Persistent favorite tables:"), "html", null, true);
            yield "
          ";
            // line 271
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 271, $this->source); })()), "favoritework", [], "any", false, false, false, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 272
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 274
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 276
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_uiprefs']</code>
          ";
            // line 283
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_table_uiprefs");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 286
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 286, $this->source); })()), "table_uiprefs", [], "any", false, false, false, 286))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 287
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 289
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 291
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Persistent tables' UI preferences:"), "html", null, true);
            yield "
          ";
            // line 296
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 296, $this->source); })()), "uiprefswork", [], "any", false, false, false, 296)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 297
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 299
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 301
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['tracking']</code>
          ";
            // line 308
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_tracking");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 311
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 311, $this->source); })()), "tracking", [], "any", false, false, false, 311))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 312
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 314
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 316
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Tracking:"), "html", null, true);
            yield "
          ";
            // line 321
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 321, $this->source); })()), "trackingwork", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 322
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 324
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 326
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['userconfig']</code>
          ";
            // line 333
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_userconfig");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 336
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 336, $this->source); })()), "userconfig", [], "any", false, false, false, 336))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 337
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 339
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 341
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User preferences:"), "html", null, true);
            yield "
          ";
            // line 346
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 346, $this->source); })()), "userconfigwork", [], "any", false, false, false, 346)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 347
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 349
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 351
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['users']</code>
          ";
            // line 358
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_users");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 361
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 361, $this->source); })()), "users", [], "any", false, false, false, 361))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 362
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 364
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 366
            yield "        </td>
      </tr>
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['usergroups']</code>
          ";
            // line 371
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_usergroups");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 374
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 374, $this->source); })()), "usergroups", [], "any", false, false, false, 374))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 375
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 377
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 379
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Configurable menus:"), "html", null, true);
            yield "
          ";
            // line 384
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 384, $this->source); })()), "menuswork", [], "any", false, false, false, 384)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 385
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 387
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 389
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['navigationhiding']</code>
          ";
            // line 396
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_navigationhiding");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 399
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 399, $this->source); })()), "navigationhiding", [], "any", false, false, false, 399))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 400
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 402
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 404
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Hide/show navigation items:"), "html", null, true);
            yield "
          ";
            // line 409
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 409, $this->source); })()), "navwork", [], "any", false, false, false, 409)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 410
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 412
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 414
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['savedsearches']</code>
          ";
            // line 421
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_savedsearches");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 424
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 424, $this->source); })()), "savedsearches", [], "any", false, false, false, 424))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 425
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 427
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 429
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 433
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Saving Query-By-Example searches:"), "html", null, true);
            yield "
          ";
            // line 434
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 434, $this->source); })()), "savedsearcheswork", [], "any", false, false, false, 434)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 435
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 437
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 439
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['central_columns']</code>
          ";
            // line 446
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_central_columns");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 449
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 449, $this->source); })()), "central_columns", [], "any", false, false, false, 449))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 450
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 452
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 454
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Managing central list of columns:"), "html", null, true);
            yield "
          ";
            // line 459
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 459, $this->source); })()), "centralcolumnswork", [], "any", false, false, false, 459)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 460
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 462
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 464
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['designer_settings']</code>
          ";
            // line 471
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_designer_settings");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 474
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 474, $this->source); })()), "designer_settings", [], "any", false, false, false, 474))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 475
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 477
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 479
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remembering designer settings:"), "html", null, true);
            yield "
          ";
            // line 484
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 484, $this->source); })()), "designersettingswork", [], "any", false, false, false, 484)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 485
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 487
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 489
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['export_templates']</code>
          ";
            // line 496
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_export_templates");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 499
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 499, $this->source); })()), "export_templates", [], "any", false, false, false, 499))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 500
                yield "            <span class=\"text-success\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Correctly working", "OK"), "html", null, true);
                yield "</strong></span>
          ";
            } else {
                // line 502
                yield "            <span class=\"text-danger\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("not OK"), "html", null, true);
                yield "</strong></span>
          ";
            }
            // line 504
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
            // line 508
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Saving export templates:"), "html", null, true);
            yield "
          ";
            // line 509
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 509, $this->source); })()), "exporttemplateswork", [], "any", false, false, false, 509)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 510
                yield "            <span class=\"text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabled"), "html", null, true);
                yield "</span>
          ";
            } else {
                // line 512
                yield "            <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
                yield "</span>
          ";
            }
            // line 514
            yield "        </td>
      </tr>
    </table>

    ";
            // line 518
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 518, $this->source); })()), "allworks", [], "any", false, false, false, 518)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 519
                yield "      <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Quick steps to set up advanced features:"), "html", null, true);
                yield "</p>

      <ul>
        <li>
          ";
                // line 523
                yield Twig\Extension\CoreExtension::sprintf(\_gettext("Create the needed tables with the <code>%screate_tables.sql</code>."), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_dir"]) || array_key_exists("sql_dir", $context) ? $context["sql_dir"] : (function () { throw new RuntimeError('Variable "sql_dir" does not exist.', 523, $this->source); })())));
                yield "
          ";
                // line 524
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("setup", "linked-tables");
                yield "
        </li>
        <li>
          ";
                // line 527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create a pma user and give access to these tables."), "html", null, true);
                yield "
          ";
                // line 528
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_controluser");
                yield "
        </li>
        <li>
          ";
                // line 531
                yield \_gettext("Enable advanced features in configuration file (<code>config.inc.php</code>), for example by starting from <code>config.sample.inc.php</code>.");
                yield "
          ";
                // line 532
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("setup", "quick-install");
                yield "
        </li>
        <li>
          ";
                // line 535
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Re-login to phpMyAdmin to load the updated configuration file."), "html", null, true);
                yield "
        </li>
      </ul>
    ";
            }
            // line 539
            yield "  ";
        }
        // line 540
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "relation/check_relations.twig";
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
        return array (  1214 => 540,  1211 => 539,  1204 => 535,  1198 => 532,  1194 => 531,  1188 => 528,  1184 => 527,  1178 => 524,  1174 => 523,  1166 => 519,  1164 => 518,  1158 => 514,  1152 => 512,  1146 => 510,  1144 => 509,  1140 => 508,  1134 => 504,  1128 => 502,  1122 => 500,  1120 => 499,  1114 => 496,  1105 => 489,  1099 => 487,  1093 => 485,  1091 => 484,  1087 => 483,  1081 => 479,  1075 => 477,  1069 => 475,  1067 => 474,  1061 => 471,  1052 => 464,  1046 => 462,  1040 => 460,  1038 => 459,  1034 => 458,  1028 => 454,  1022 => 452,  1016 => 450,  1014 => 449,  1008 => 446,  999 => 439,  993 => 437,  987 => 435,  985 => 434,  981 => 433,  975 => 429,  969 => 427,  963 => 425,  961 => 424,  955 => 421,  946 => 414,  940 => 412,  934 => 410,  932 => 409,  928 => 408,  922 => 404,  916 => 402,  910 => 400,  908 => 399,  902 => 396,  893 => 389,  887 => 387,  881 => 385,  879 => 384,  875 => 383,  869 => 379,  863 => 377,  857 => 375,  855 => 374,  849 => 371,  842 => 366,  836 => 364,  830 => 362,  828 => 361,  822 => 358,  813 => 351,  807 => 349,  801 => 347,  799 => 346,  795 => 345,  789 => 341,  783 => 339,  777 => 337,  775 => 336,  769 => 333,  760 => 326,  754 => 324,  748 => 322,  746 => 321,  742 => 320,  736 => 316,  730 => 314,  724 => 312,  722 => 311,  716 => 308,  707 => 301,  701 => 299,  695 => 297,  693 => 296,  689 => 295,  683 => 291,  677 => 289,  671 => 287,  669 => 286,  663 => 283,  654 => 276,  648 => 274,  642 => 272,  640 => 271,  636 => 270,  630 => 266,  624 => 264,  618 => 262,  616 => 261,  610 => 258,  601 => 251,  595 => 249,  589 => 247,  587 => 246,  583 => 245,  577 => 241,  571 => 239,  565 => 237,  563 => 236,  557 => 233,  548 => 226,  542 => 224,  536 => 222,  534 => 221,  530 => 220,  524 => 216,  518 => 214,  512 => 212,  510 => 211,  504 => 208,  495 => 201,  489 => 199,  483 => 197,  481 => 196,  477 => 195,  471 => 191,  465 => 189,  459 => 187,  457 => 186,  451 => 183,  444 => 178,  436 => 173,  432 => 172,  427 => 169,  425 => 168,  421 => 166,  415 => 164,  409 => 162,  407 => 161,  403 => 160,  397 => 156,  391 => 154,  385 => 152,  383 => 151,  379 => 150,  373 => 146,  367 => 144,  361 => 142,  359 => 141,  353 => 138,  344 => 131,  338 => 129,  332 => 127,  330 => 126,  326 => 125,  320 => 121,  314 => 119,  308 => 117,  306 => 116,  300 => 113,  293 => 108,  287 => 106,  281 => 104,  279 => 103,  273 => 100,  264 => 93,  258 => 91,  252 => 89,  250 => 88,  246 => 87,  240 => 83,  234 => 81,  228 => 79,  226 => 78,  220 => 75,  211 => 68,  205 => 66,  199 => 64,  197 => 63,  193 => 62,  187 => 58,  181 => 56,  175 => 54,  173 => 53,  167 => 50,  156 => 42,  150 => 39,  143 => 34,  140 => 33,  138 => 30,  131 => 31,  128 => 30,  125 => 29,  122 => 28,  119 => 27,  116 => 26,  114 => 23,  107 => 24,  104 => 23,  101 => 22,  99 => 19,  92 => 20,  89 => 19,  86 => 18,  84 => 17,  79 => 15,  75 => 14,  69 => 11,  65 => 10,  61 => 9,  58 => 8,  56 => 7,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
  <h1 class=\"my-3\">
    {{ t('phpMyAdmin configuration storage') }}
    {{ show_docu('setup', 'phpmyadmin-configuration-storage') }}
  </h1>

  {% if relation_parameters.db is null %}
    <p>
      {{ t('Configuration of pmadb…') }}
      <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
      {{ show_docu('setup', 'phpmyadmin-configuration-storage') }}
    </p>
    <p>
      {{ t('General relation features') }}
      <span class=\"text-danger\">{{ t('Disabled') }}</span>
    </p>
    {% if zero_conf %}
      {% if db == '' %}
        {% apply format('<a href=\"' ~ url('/check-relations') ~ '\" data-post=\"' ~ get_common({'db': db, 'create_pmadb': true, 'goto': url('/database/operations')}) ~ '\">', '</a>', config_storage_database_name)|notice %}
          {{ t(\"%sCreate%s a database named '%s' and setup the phpMyAdmin configuration storage there.\") }}
        {% endapply %}
      {% else %}
        {% apply format('<a href=\"' ~ url('/check-relations') ~ '\" data-post=\"' ~ get_common({'db': db, 'fixall_pmadb': true, 'goto': url('/database/operations')}) ~ '\">', '</a>')|notice %}
          {{ t('%sCreate%s the phpMyAdmin configuration storage in the current database.') }}
        {% endapply %}
      {% endif %}
    {% endif %}
  {% else %}
    {% if not relation_parameters.allworks and zero_conf and are_config_storage_tables_defined %}
      {% apply format('<a href=\"' ~ url('/check-relations') ~ '\" data-post=\"' ~ get_common({'db': db, 'fix_pmadb': true, 'goto': url('/database/operations')}) ~ '\">', '</a>')|notice %}
        {{ t('%sCreate%s missing phpMyAdmin configuration storage tables.') }}
      {% endapply %}
    {% endif %}

    <table class=\"table table-striped\">
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['pmadb']</code>
          {{ show_docu('config', 'cfg_Servers_pmadb') }}
        </th>
        <td class=\"text-end\">
          <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['relation']</code>
          {{ show_docu('config', 'cfg_Servers_relation') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.relation is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('General relation features:') }}
          {% if relation_parameters.relwork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_info']</code>
          {{ show_docu('config', 'cfg_Servers_table_info') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.table_info is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Display features:') }}
          {% if relation_parameters.displaywork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_coords']</code>
          {{ show_docu('config', 'cfg_Servers_table_coords') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.table_coords is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['pdf_pages']</code>
          {{ show_docu('config', 'cfg_Servers_pdf_pages') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.pdf_pages is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Designer and creation of PDFs:') }}
          {% if relation_parameters.pdfwork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['column_info']</code>
          {{ show_docu('config', 'cfg_Servers_column_info') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.column_info is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Displaying column comments:') }}
          {% if relation_parameters.commwork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Browser transformation:') }}
          {% if relation_parameters.mimework %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      {% if relation_parameters.commwork and not relation_parameters.mimework %}
        <tr>
          <td colspan=\"2\" class=\"text-end\">
            <span class=\"text-danger\">
              {{ t('Please see the documentation on how to update your column_info table.') }}
              {{ show_docu('config', 'cfg_Servers_column_info') }}
            </span>
          </td>
        </tr>
      {% endif %}
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['bookmarktable']</code>
          {{ show_docu('config', 'cfg_Servers_bookmarktable') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.bookmark is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Bookmarked SQL query:') }}
          {% if relation_parameters.bookmarkwork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['history']</code>
          {{ show_docu('config', 'cfg_Servers_history') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.history is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('SQL history:') }}
          {% if relation_parameters.historywork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['recent']</code>
          {{ show_docu('config', 'cfg_Servers_recent') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.recent is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Persistent recently used tables:') }}
          {% if relation_parameters.recentwork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['favorite']</code>
          {{ show_docu('config', 'cfg_Servers_favorite') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.favorite is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Persistent favorite tables:') }}
          {% if relation_parameters.favoritework %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_uiprefs']</code>
          {{ show_docu('config', 'cfg_Servers_table_uiprefs') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.table_uiprefs is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t(\"Persistent tables' UI preferences:\") }}
          {% if relation_parameters.uiprefswork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['tracking']</code>
          {{ show_docu('config', 'cfg_Servers_tracking') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.tracking is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Tracking:') }}
          {% if relation_parameters.trackingwork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['userconfig']</code>
          {{ show_docu('config', 'cfg_Servers_userconfig') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.userconfig is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('User preferences:') }}
          {% if relation_parameters.userconfigwork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['users']</code>
          {{ show_docu('config', 'cfg_Servers_users') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.users is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['usergroups']</code>
          {{ show_docu('config', 'cfg_Servers_usergroups') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.usergroups is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Configurable menus:') }}
          {% if relation_parameters.menuswork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['navigationhiding']</code>
          {{ show_docu('config', 'cfg_Servers_navigationhiding') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.navigationhiding is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Hide/show navigation items:') }}
          {% if relation_parameters.navwork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['savedsearches']</code>
          {{ show_docu('config', 'cfg_Servers_savedsearches') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.savedsearches is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Saving Query-By-Example searches:') }}
          {% if relation_parameters.savedsearcheswork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['central_columns']</code>
          {{ show_docu('config', 'cfg_Servers_central_columns') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.central_columns is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Managing central list of columns:') }}
          {% if relation_parameters.centralcolumnswork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['designer_settings']</code>
          {{ show_docu('config', 'cfg_Servers_designer_settings') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.designer_settings is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Remembering designer settings:') }}
          {% if relation_parameters.designersettingswork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['export_templates']</code>
          {{ show_docu('config', 'cfg_Servers_export_templates') }}
        </th>
        <td class=\"text-end\">
          {% if relation_parameters.export_templates is not null %}
            <span class=\"text-success\"><strong>{{ t('OK', context = 'Correctly working') }}</strong></span>
          {% else %}
            <span class=\"text-danger\"><strong>{{ t('not OK') }}</strong></span>
          {% endif %}
        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          {{ t('Saving export templates:') }}
          {% if relation_parameters.exporttemplateswork %}
            <span class=\"text-success\">{{ t('Enabled') }}</span>
          {% else %}
            <span class=\"text-danger\">{{ t('Disabled') }}</span>
          {% endif %}
        </td>
      </tr>
    </table>

    {% if not relation_parameters.allworks %}
      <p>{{ t('Quick steps to set up advanced features:') }}</p>

      <ul>
        <li>
          {{ t('Create the needed tables with the <code>%screate_tables.sql</code>.')|format(sql_dir|e)|raw }}
          {{ show_docu('setup', 'linked-tables') }}
        </li>
        <li>
          {{ t('Create a pma user and give access to these tables.') }}
          {{ show_docu('config', 'cfg_Servers_controluser') }}
        </li>
        <li>
          {{ t('Enable advanced features in configuration file (<code>config.inc.php</code>), for example by starting from <code>config.sample.inc.php</code>.')|raw }}
          {{ show_docu('setup', 'quick-install') }}
        </li>
        <li>
          {{ t('Re-login to phpMyAdmin to load the updated configuration file.') }}
        </li>
      </ul>
    {% endif %}
  {% endif %}
</div>
", "relation/check_relations.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/relation/check_relations.twig");
    }
}
