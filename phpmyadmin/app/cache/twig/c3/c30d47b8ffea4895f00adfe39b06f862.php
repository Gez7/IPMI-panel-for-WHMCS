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

/* server/privileges/users_overview.twig */
class __TwigTemplate_2002bb295bcc297195f71e9bdc85efb4 extends Template
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
        yield "<form name=\"usersForm\" id=\"usersForm\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" method=\"post\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
  <div class=\"table-responsive\">
    <table id=\"userRightsTable\" class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th></th>
          <th scope=\"col\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
        yield "</th>
          <th scope=\"col\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host name"), "html", null, true);
        yield "</th>
          <th scope=\"col\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password"), "html", null, true);
        yield "</th>
          <th scope=\"col\">
            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Global privileges"), "html", null, true);
        yield "
            ";
        // line 13
        yield PhpMyAdmin\Html\Generator::showHint("Note: MySQL privilege names are expressed in English.");
        yield "
          </th>
          ";
        // line 15
        if ((($tmp = (isset($context["menus_work"]) || array_key_exists("menus_work", $context) ? $context["menus_work"] : (function () { throw new RuntimeError('Variable "menus_work" does not exist.', 15, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "            <th scope=\"col\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User group"), "html", null, true);
            yield "</th>
          ";
        }
        // line 18
        yield "          <th scope=\"col\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Grant"), "html", null, true);
        yield "</th>";
        // line 19
        $context["action_colspan"] = 2;
        // line 20
        if (((isset($context["user_group_count"]) || array_key_exists("user_group_count", $context) ? $context["user_group_count"] : (function () { throw new RuntimeError('Variable "user_group_count" does not exist.', 20, $this->source); })()) > 0)) {
            $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 20, $this->source); })()) + 1);
        }
        // line 21
        if ((($tmp = (isset($context["has_account_locking"]) || array_key_exists("has_account_locking", $context) ? $context["has_account_locking"] : (function () { throw new RuntimeError('Variable "has_account_locking" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["action_colspan"] = ((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 21, $this->source); })()) + 1);
        }
        // line 22
        yield "          <th scope=\"col\" colspan=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action_colspan"]) || array_key_exists("action_colspan", $context) ? $context["action_colspan"] : (function () { throw new RuntimeError('Variable "action_colspan" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
        yield "</th>
        </tr>
      </thead>

      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hosts"]) || array_key_exists("hosts", $context) ? $context["hosts"] : (function () { throw new RuntimeError('Variable "hosts" does not exist.', 27, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["host"]) {
            // line 28
            yield "          <tr>
            <td>
              <input type=\"checkbox\" class=\"checkall\" id=\"checkbox_sel_users_";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            yield "\" value=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 31) . "&amp;#27;") . CoreExtension::getAttribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 31)), "html", null, true);
            yield "\" name=\"selected_usr[]\">
            </td>
            <td>
              <label for=\"checkbox_sel_users_";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
            yield "\">
                ";
            // line 35
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 35))) {
                // line 36
                yield "                  <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Any"), "html", null, true);
                yield "</span>
                ";
            } else {
                // line 38
                yield "                 <a class=\"edit_user_anchor\" href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                 // line 39
$context["host"], "user", [], "any", false, false, false, 39), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                 // line 40
$context["host"], "host", [], "any", false, false, false, 40), "dbname" => "", "tablename" => "", "routinename" => ""]);
                // line 44
                yield "\">
                 ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 45), "html", null, true);
                yield "
                 </a>
                ";
            }
            // line 48
            yield "              </label>
            </td>
            <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
            <td>
              ";
            // line 52
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["host"], "has_password", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true);
                yield "
              ";
            } else {
                // line 55
                yield "                <span class=\"text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true);
                yield "</span>
              ";
            }
            // line 57
            yield "              ";
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["host"], "has_select_priv", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Html\Generator::showHint(\_gettext("The selected user was not found in the privilege table."))) : (""));
            yield "
            </td>
            <td>
              <code>";
            // line 60
            yield Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "privileges", [], "any", false, false, false, 60), ", ");
            yield "</code>
            </td>
            ";
            // line 62
            if ((($tmp = (isset($context["menus_work"]) || array_key_exists("menus_work", $context) ? $context["menus_work"] : (function () { throw new RuntimeError('Variable "menus_work" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "              <td class=\"usrGroup\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "group", [], "any", false, false, false, 63), "html", null, true);
                yield "</td>
            ";
            }
            // line 65
            yield "            <td>";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["host"], "has_grant", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
            yield "</td>
            ";
            // line 66
            if ((($tmp = (isset($context["is_grantuser"]) || array_key_exists("is_grantuser", $context) ? $context["is_grantuser"] : (function () { throw new RuntimeError('Variable "is_grantuser" does not exist.', 66, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "              <td class=\"text-center\">
                <a class=\"edit_user_anchor\" href=\"";
                // line 68
                yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                 // line 69
$context["host"], "user", [], "any", false, false, false, 69), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["host"], "host", [], "any", false, false, false, 70), "dbname" => "", "tablename" => "", "routinename" => ""]);
                // line 74
                yield "\">
                  ";
                // line 75
                yield PhpMyAdmin\Html\Generator::getIcon("b_usredit", \_gettext("Edit privileges"));
                yield "
                </a>
              </td>
            ";
            }
            // line 79
            yield "            ";
            if (((isset($context["menus_work"]) || array_key_exists("menus_work", $context) ? $context["menus_work"] : (function () { throw new RuntimeError('Variable "menus_work" does not exist.', 79, $this->source); })()) && ((isset($context["user_group_count"]) || array_key_exists("user_group_count", $context) ? $context["user_group_count"] : (function () { throw new RuntimeError('Variable "user_group_count" does not exist.', 79, $this->source); })()) > 0))) {
                // line 80
                yield "              <td class=\"text-center\">
                ";
                // line 81
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 81))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 82
                    yield "                  <button type=\"button\" class=\"btn btn-link p-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserGroupModal\" data-username=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 82), "html", null, true);
                    yield "\">
                    ";
                    // line 83
                    yield PhpMyAdmin\Html\Generator::getIcon("b_usrlist", \_gettext("Edit user group"));
                    yield "
                  </button>
                ";
                }
                // line 86
                yield "              </td>
            ";
            }
            // line 88
            yield "            <td class=\"text-center\">
              <a class=\"export_user_anchor ajax\" href=\"";
            // line 89
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,             // line 90
$context["host"], "user", [], "any", false, false, false, 90), "hostname" => CoreExtension::getAttribute($this->env, $this->source,             // line 91
$context["host"], "host", [], "any", false, false, false, 91), "initial" =>             // line 92
(isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 92, $this->source); })()), "export" => true]);
            // line 94
            yield "\">
                ";
            // line 95
            yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", \_gettext("Export"));
            yield "
              </a>
            </td>
            ";
            // line 98
            if ((($tmp = (isset($context["has_account_locking"]) || array_key_exists("has_account_locking", $context) ? $context["has_account_locking"] : (function () { throw new RuntimeError('Variable "has_account_locking" does not exist.', 98, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 99
                yield "              <td>
                <button type=\"button\" class=\"btn btn-link p-0 jsAccountLocking\" title=\"";
                // line 100
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Unlock this account."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Lock this account."), "html", null, true)));
                yield "\" data-is-locked=\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\" data-user-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 100), "html", null, true);
                yield "\" data-host-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 100), "html", null, true);
                yield "\">
                  ";
                // line 101
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 102
                    yield "                    ";
                    $context["unlock_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Unlock the account.", "Unlock"), "html", null, true);
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 103
                    yield "                    ";
                    yield PhpMyAdmin\Html\Generator::getIcon("s_unlock", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unlock_text"]) || array_key_exists("unlock_text", $context) ? $context["unlock_text"] : (function () { throw new RuntimeError('Variable "unlock_text" does not exist.', 103, $this->source); })())));
                    yield "
                  ";
                } else {
                    // line 105
                    yield "                    ";
                    $context["lock_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Lock the account.", "Lock"), "html", null, true);
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 106
                    yield "                    ";
                    yield PhpMyAdmin\Html\Generator::getIcon("s_lock", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lock_text"]) || array_key_exists("lock_text", $context) ? $context["lock_text"] : (function () { throw new RuntimeError('Variable "lock_text" does not exist.', 106, $this->source); })())));
                    yield "
                  ";
                }
                // line 108
                yield "                </button>
              </td>
            ";
            }
            // line 111
            yield "          </tr>
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
        unset($context['_seq'], $context['_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "      </tbody>
    </table>
  </div>

  <div class=\"float-start row\">
    <div class=\"col-12\">
      ";
        // line 119
        yield PhpMyAdmin\Html\Generator::getImage("select_all_arrow", \_gettext("With selected:"), ["dir" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 119, $this->source); })()), "text_dir", [], "any", false, false, false, 119), "width" => "38", "height" => "22"]);
        yield "
      <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
        yield "\">
      <label for=\"usersForm_checkall\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
        yield "</label>
      <em class=\"with-selected\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("With selected:"), "html", null, true);
        yield "</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
        yield "\">
        ";
        // line 125
        yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", \_gettext("Export"));
        yield "
      </button>

      <input type=\"hidden\" name=\"initial\" value=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 128, $this->source); })()), "html", null, true);
        yield "\">
    </div>
  </div>

  <div class=\"clearfloat\"></div>

  ";
        // line 134
        if ((($tmp = (isset($context["is_createuser"]) || array_key_exists("is_createuser", $context) ? $context["is_createuser"] : (function () { throw new RuntimeError('Variable "is_createuser" does not exist.', 134, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Create new user", "New"), "html", null, true);
            yield "</div>
      <div class=\"card-body\">
        <a id=\"add_user_anchor\" href=\"";
            // line 138
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true]);
            yield "\">
          ";
            // line 139
            yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", \_gettext("Add user account"));
            yield "
        </a>
      </div>
    </div>
  ";
        }
        // line 144
        yield "
  <div id=\"deleteUserCard\" class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 146
        yield PhpMyAdmin\Html\Generator::getIcon("b_usrdrop", \_gettext("Remove selected user accounts"));
        yield "</div>
    <div class=\"card-body\">
      <p class=\"card-text\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Revoke all active privileges from the users and delete them afterwards."), "html", null, true);
        yield "</p>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"dropUsersDbCheckbox\" name=\"drop_users_db\">
        <label class=\"form-check-label\" for=\"dropUsersDbCheckbox\">
          ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drop the databases that have the same names as the users."), "html", null, true);
        yield "
        </label>
      </div>
    </div>
    <div class=\"card-footer text-end\">
      <input type=\"hidden\" name=\"mode\" value=\"2\">
      <input id=\"buttonGo\" class=\"btn btn-primary ajax\" type=\"submit\" name=\"delete\" value=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>

<div class=\"modal fade\" id=\"editUserGroupModal\" tabindex=\"-1\" aria-labelledby=\"editUserGroupModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"editUserGroupModalLabel\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit user group"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
        yield "</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editUserGroupModalSaveButton\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save changes"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/users_overview.twig";
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
        return array (  460 => 177,  456 => 176,  449 => 172,  442 => 168,  438 => 167,  426 => 158,  417 => 152,  410 => 148,  405 => 146,  401 => 144,  393 => 139,  389 => 138,  384 => 136,  381 => 135,  379 => 134,  370 => 128,  364 => 125,  360 => 124,  355 => 122,  351 => 121,  347 => 120,  343 => 119,  335 => 113,  320 => 111,  315 => 108,  309 => 106,  303 => 105,  297 => 103,  291 => 102,  289 => 101,  279 => 100,  276 => 99,  274 => 98,  268 => 95,  265 => 94,  263 => 92,  262 => 91,  261 => 90,  260 => 89,  257 => 88,  253 => 86,  247 => 83,  242 => 82,  240 => 81,  237 => 80,  234 => 79,  227 => 75,  224 => 74,  222 => 70,  221 => 69,  220 => 68,  217 => 67,  215 => 66,  210 => 65,  204 => 63,  202 => 62,  197 => 60,  190 => 57,  184 => 55,  178 => 53,  176 => 52,  171 => 50,  167 => 48,  161 => 45,  158 => 44,  156 => 40,  155 => 39,  153 => 38,  147 => 36,  145 => 35,  141 => 34,  135 => 31,  132 => 30,  128 => 28,  111 => 27,  100 => 22,  96 => 21,  92 => 20,  90 => 19,  86 => 18,  80 => 16,  78 => 15,  73 => 13,  69 => 12,  64 => 10,  60 => 9,  56 => 8,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form name=\"usersForm\" id=\"usersForm\" action=\"{{ url('/server/privileges') }}\" method=\"post\">
  {{ get_hidden_inputs() }}
  <div class=\"table-responsive\">
    <table id=\"userRightsTable\" class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th></th>
          <th scope=\"col\">{{ t('User name') }}</th>
          <th scope=\"col\">{{ t('Host name') }}</th>
          <th scope=\"col\">{{ t('Password') }}</th>
          <th scope=\"col\">
            {{ t('Global privileges') }}
            {{ show_hint('Note: MySQL privilege names are expressed in English.') }}
          </th>
          {% if menus_work %}
            <th scope=\"col\">{{ t('User group') }}</th>
          {% endif %}
          <th scope=\"col\">{{ t('Grant') }}</th>
          {%- set action_colspan = 2 %}
          {%- if user_group_count > 0 %}{% set action_colspan = action_colspan + 1 %}{% endif %}
          {%- if has_account_locking %}{% set action_colspan = action_colspan + 1 %}{% endif %}
          <th scope=\"col\" colspan=\"{{ action_colspan }}\">{{ t('Action') }}</th>
        </tr>
      </thead>

      <tbody>
        {% for host in hosts %}
          <tr>
            <td>
              <input type=\"checkbox\" class=\"checkall\" id=\"checkbox_sel_users_{{ loop.index }}\" value=\"
                {{- host.user ~ '&amp;#27;' ~ host.host }}\" name=\"selected_usr[]\">
            </td>
            <td>
              <label for=\"checkbox_sel_users_{{ loop.index }}\">
                {% if host.user is empty %}
                  <span class=\"text-danger\">{{ t('Any') }}</span>
                {% else %}
                 <a class=\"edit_user_anchor\" href=\"{{ url('/server/privileges', {
                  'username': host.user,
                  'hostname': host.host,
                  'dbname': '',
                  'tablename': '',
                  'routinename': '',
                }) }}\">
                 {{ host.user }}
                 </a>
                {% endif %}
              </label>
            </td>
            <td>{{ host.host }}</td>
            <td>
              {% if host.has_password %}
                {{ t('Yes') }}
              {% else %}
                <span class=\"text-danger\">{{ t('No') }}</span>
              {% endif %}
              {{ not host.has_select_priv ? show_hint(t('The selected user was not found in the privilege table.')) }}
            </td>
            <td>
              <code>{{ host.privileges|join(', ')|raw }}</code>
            </td>
            {% if menus_work %}
              <td class=\"usrGroup\">{{ host.group }}</td>
            {% endif %}
            <td>{{ host.has_grant ? t('Yes') : t('No') }}</td>
            {% if is_grantuser %}
              <td class=\"text-center\">
                <a class=\"edit_user_anchor\" href=\"{{ url('/server/privileges', {
                  'username': host.user,
                  'hostname': host.host,
                  'dbname': '',
                  'tablename': '',
                  'routinename': '',
                }) }}\">
                  {{ get_icon('b_usredit', t('Edit privileges')) }}
                </a>
              </td>
            {% endif %}
            {% if menus_work and user_group_count > 0 %}
              <td class=\"text-center\">
                {% if host.user is not empty %}
                  <button type=\"button\" class=\"btn btn-link p-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserGroupModal\" data-username=\"{{ host.user }}\">
                    {{ get_icon('b_usrlist', t('Edit user group')) }}
                  </button>
                {% endif %}
              </td>
            {% endif %}
            <td class=\"text-center\">
              <a class=\"export_user_anchor ajax\" href=\"{{ url('/server/privileges', {
                'username': host.user,
                'hostname': host.host,
                'initial': initial,
                'export': true,
              }) }}\">
                {{ get_icon('b_tblexport', t('Export')) }}
              </a>
            </td>
            {% if has_account_locking %}
              <td>
                <button type=\"button\" class=\"btn btn-link p-0 jsAccountLocking\" title=\"{{ host.is_account_locked ? t('Unlock this account.') : t('Lock this account.') }}\" data-is-locked=\"{{ host.is_account_locked ? 'true' : 'false' }}\" data-user-name=\"{{ host.user }}\" data-host-name=\"{{ host.host }}\">
                  {% if host.is_account_locked %}
                    {% set unlock_text %}{{ t('Unlock', context = 'Unlock the account.') }}{% endset %}
                    {{ get_icon('s_unlock', unlock_text|e) }}
                  {% else %}
                    {% set lock_text %}{{ t('Lock', context = 'Lock the account.') }}{% endset %}
                    {{ get_icon('s_lock', lock_text|e) }}
                  {% endif %}
                </button>
              </td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>

  <div class=\"float-start row\">
    <div class=\"col-12\">
      {{ get_image('select_all_arrow', t('With selected:'), {'dir': pma.text_dir, 'width': '38', 'height': '22'}) }}
      <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"{{ t('Check all') }}\">
      <label for=\"usersForm_checkall\">{{ t('Check all') }}</label>
      <em class=\"with-selected\">{{ t('With selected:') }}</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"{{ t('Export') }}\">
        {{ get_icon('b_tblexport', t('Export')) }}
      </button>

      <input type=\"hidden\" name=\"initial\" value=\"{{ initial }}\">
    </div>
  </div>

  <div class=\"clearfloat\"></div>

  {% if is_createuser %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">{{ t('New', context = 'Create new user') }}</div>
      <div class=\"card-body\">
        <a id=\"add_user_anchor\" href=\"{{ url('/server/privileges', {'adduser': true}) }}\">
          {{ get_icon('b_usradd', t('Add user account')) }}
        </a>
      </div>
    </div>
  {% endif %}

  <div id=\"deleteUserCard\" class=\"card mb-3\">
    <div class=\"card-header\">{{ get_icon('b_usrdrop', t('Remove selected user accounts')) }}</div>
    <div class=\"card-body\">
      <p class=\"card-text\">{{ t('Revoke all active privileges from the users and delete them afterwards.') }}</p>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"dropUsersDbCheckbox\" name=\"drop_users_db\">
        <label class=\"form-check-label\" for=\"dropUsersDbCheckbox\">
          {{ t('Drop the databases that have the same names as the users.') }}
        </label>
      </div>
    </div>
    <div class=\"card-footer text-end\">
      <input type=\"hidden\" name=\"mode\" value=\"2\">
      <input id=\"buttonGo\" class=\"btn btn-primary ajax\" type=\"submit\" name=\"delete\" value=\"{{ t('Go') }}\">
    </div>
  </div>
</form>

<div class=\"modal fade\" id=\"editUserGroupModal\" tabindex=\"-1\" aria-labelledby=\"editUserGroupModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"editUserGroupModalLabel\">{{ t('Edit user group') }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">{{ t('Loading…') }}</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editUserGroupModalSaveButton\">{{ t('Save changes') }}</button>
      </div>
    </div>
  </div>
</div>
", "server/privileges/users_overview.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/users_overview.twig");
    }
}
