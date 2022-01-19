<?php
	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
    session_start();
    include_once("assets/functions/acess/Db.class.php");

    $result_Patio = "SELECT DISTINCT Nome, Codigo, Cidade FROM Patio ";
    $resultado_Patio = mysqli_query($conn, $result_Patio);
    $resultado = mysqli_fetch_assoc($resultado_Patio);
        
    //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
    if(isset($resultado)){
        $_SESSION['NomePatio'] = $resultado['Nome'];
        $_SESSION['CodigoPatio'] = $resultado['Codigo'];
        $_SESSION['CidadePatio'] = $resultado['Cidade'];
    }
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Cadastramento de Veículos | RSA Peças Usadas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Sistema da RSA Peças Usadas">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="app-main">
<!------------------------------------------------------------------ Menu Lateral Esquerda BEGIN ---------------------------------------------------------------------->
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="index.html">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard Example 1
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">UI Components</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Elements
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="elements-buttons-standard.html">
                                                <i class="metismenu-icon"></i>
                                                Buttons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-dropdowns.html">
                                                <i class="metismenu-icon">
                                                </i>Dropdowns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-icons.html">
                                                <i class="metismenu-icon">
                                                </i>Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-badges-labels.html">
                                                <i class="metismenu-icon">
                                                </i>Badges
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-cards.html">
                                                <i class="metismenu-icon">
                                                </i>Cards
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-list-group.html">
                                                <i class="metismenu-icon">
                                                </i>List Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-navigation.html">
                                                <i class="metismenu-icon">
                                                </i>Navigation Menus
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-utilities.html">
                                                <i class="metismenu-icon">
                                                </i>Utilities
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Components
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="components-tabs.html">
                                                <i class="metismenu-icon">
                                                </i>Tabs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-accordions.html">
                                                <i class="metismenu-icon">
                                                </i>Accordions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-notifications.html">
                                                <i class="metismenu-icon">
                                                </i>Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-modals.html">
                                                <i class="metismenu-icon">
                                                </i>Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-progress-bar.html">
                                                <i class="metismenu-icon">
                                                </i>Progress Bar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-tooltips-popovers.html">
                                                <i class="metismenu-icon">
                                                </i>Tooltips &amp; Popovers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-carousel.html">
                                                <i class="metismenu-icon">
                                                </i>Carousel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-calendar.html">
                                                <i class="metismenu-icon">
                                                </i>Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-pagination.html">
                                                <i class="metismenu-icon">
                                                </i>Pagination
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-scrollable-elements.html">
                                                <i class="metismenu-icon">
                                                </i>Scrollable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-maps.html">
                                                <i class="metismenu-icon">
                                                </i>Maps
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li  >
                                    <a href="tables-regular.html">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Tables
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Widgets</li>
                                <li>
                                    <a href="dashboard-boxes.html">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Dashboard Boxes
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Forms</li>
                                <li>
                                    <a href="forms-controls.html" class="mm-active">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>Forms Controls
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-layouts.html">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>Forms Validation
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Charts</li>
                                <li>
                                    <a href="charts-chartjs.html">
                                        <i class="metismenu-icon pe-7s-graph2">
                                        </i>ChartJS
                                    </a>
                                </li>

                                <!-- Guias referentes aos Dados dos Veiculos-->
                                
                                <li class="app-sidebar__heading">Veículos</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-plus">
                                        </i>
                                        Cadastro de Dados
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="components-tabs.html">
                                                <i class="metismenu-icon">
                                                </i>Inserir Pátio
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-tabs.html">
                                                <i class="metismenu-icon">
                                                </i>Inserir Leilão
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components-tabs.html">
                                                <i class="metismenu-icon">
                                                </i>Inserir Veículo
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-search">
                                        </i>
                                        Consulta de Dados
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
<!------------------------------------------------------------------ Menu Lateral Esquerda END ---------------------------------------------------------------------->              
<!------------------------------------------------------------------ Area de Trabalho BEGIN ---------------------------------------------------------------------->
<!--------------------------------------------------------------- Titulo da Area de trabalho BEGIN ---------------------------------------------------------------------->               
              
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-premium-dark">
                                        </i>
                                    </div>
                                    <div>Inserir Veículos
                                        <div class="page-title-subheading">Página de inserção de veículos, pátios e leilões no sistema RSA Peças Usadas.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--------------------------------------------------------- Titulo da Area de trabalho END ---------------------------------------------------------------------->
<!-------------------------------------------------------------- Guais BEGIN --------------------------------------------------------------------->            
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Pátios</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Leilões</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                    <span>Veículos</span>
                                </a>
                            </li>
                        </ul>
<!-------------------------------------------------------------- Guais BEGIN ---------------------------------------------------------------------> 
                        <div>  
                            <h3 style="color:#c9343c;">
                                <?php 
                                    //Recuperando o valor da variável global, os erro de login.
                                        if(isset($_SESSION['MensagemMembroErro'])){
                                            echo $_SESSION['MensagemMembroErro'];
                                            unset($_SESSION['MensagemMembroErro']);
                                }?>
                            </h3>
                        </div>
<!-------------------------------------------------------------- Container Pátio BEGIN --------------------------------------------------------------------->

                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <form action="assets/functions/insert_patio.php" method="POST">
                                    <div class="row">                                   
                                        <div class="col-md-6">
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Cadastrar Pátio</h5>
                                                    <div class="position-relative form-group"><label class="">Nome do Pátio</label><input name="NomePatio" id="NomePatio" placeholder="Nome Fantasia do Pátio..." type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">Código do Pátio</label><input name="CodigoPatio" id="CodigoPatio" placeholder="Código do Pátio..." type="number" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">CNPJ</label><input name="CNPJPatio" id="CNPJPatio" placeholder="CNPJ do Pátio..." type="number" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">E-mail</label><input name="EmailPatio" id="EmailPatio" placeholder="E-mail do Pátio..." type="email" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">Telefone</label><input name="TelefonePatio" id="TelefonePatio" placeholder="Telefone do Pátio..." type="number" class="form-control"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Endereço</h5>
                                                    <div class="position-relative form-group"><label class="">Lougradouro</label><input name="LougradouroPatio" id="LougradouroPatio" placeholder="Lougradouro..." type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">Número</label><input name="NumeroPatio" id="NumeroPatio" placeholder="Número..." type="number" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">Bairro</label><input name="BairroPatio" id="BairroPatio" placeholder="Bairro..." type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">Cidade</label><input name="CidadePatio" id="CidadePatio" placeholder="Cidade..." type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">Estados</label>
                                                        <select class="mb-2 form-control" name="EstadoPatio" id="EstadoPatio">
                                                            <option value="">Selecione</option>
                                                            <option value="AC">Acre</option>
                                                            <option value="AL">Alagoas</option>
                                                            <option value="AP">Amapá</option>
                                                            <option value="AM">Amazonas</option>
                                                            <option value="BA">Bahia</option>
                                                            <option value="CE">Ceará</option>
                                                            <option value="DF">Distrito Federal</option>
                                                            <option value="ES">Espirito Santo</option>
                                                            <option value="GO">Goiás</option>
                                                            <option value="MA">Maranhão</option>
                                                            <option value="MS">Mato Grosso do Sul</option>
                                                            <option value="MT">Mato Grosso</option>
                                                            <option value="MG">Minas Gerais</option>
                                                            <option value="PA">Pará</option>
                                                            <option value="PB">Paraíba</option>
                                                            <option value="PR">Paraná</option>
                                                            <option value="PE">Pernambuco</option>
                                                            <option value="PI">Piauí</option>
                                                            <option value="RJ">Rio de Janeiro</option>
                                                            <option value="RN">Rio Grande do Norte</option>
                                                            <option value="RS">Rio Grande do Sul</option>
                                                            <option value="RO">Rondônia</option>
                                                            <option value="RR">Roraima</option>
                                                            <option value="SC">Santa Catarina</option>
                                                            <option value="SP">São Paulo</option>
                                                            <option value="SE">Sergipe</option>
                                                            <option value="TO">Tocantins</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="mt-1 btn btn-primary">Cadastrar</button>
                                        </div> 
                                        <div class="col-md-12">
                                            <br />
                                        </div>                                                                      
                                    </div>   
                                </form>                              
                            </div>
<!-------------------------------------------------------------- Container Pátio END --------------------------------------------------------------------->
<!-------------------------------------------------------------- Container Leiloes BEGIN --------------------------------------------------------------------->
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <form enctype="multipart/form-data" action="assets/functions/insert_leilao.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="main-card mb-3 card">                                            
                                                <div class="card-body"><h5 class="card-title">Cadastar Leilão</h5>
                                                    <div class="position-relative form-group"><label class="">Modalidade</label>
                                                        <fieldset class="position-relative form-group">
                                                            <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio">Off-line</label></div>
                                                            <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio2" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio2">On-line</label></div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="divider"></div>
                                                    <div class="position-relative form-group"><label class="">Cidade</label>
                                                        <select class="mb-2 form-control" name="" id="">
                                                            <option value="">Selecione</option>
                                                            <?php 
                                                                echo "<option value=''>" . $_SESSION['CidadePatio'] . "</option>";
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="position-relative form-group"><label class="">Pátio</label>
                                                        <select class="mb-2 form-control">
                                                            <option value="">Selecione</option>
                                                        </select>
                                                    </div>                                                        
                                                    <div class="position-relative form-group"><label class="">Código</label><input name="LeilaoCodigo" id="LeilaoCodigo" placeholder="Código..." type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">Data</label><input name="LeilaoData" id="LeilaoData" placeholder="Data de Ínicio..." type="date" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="exampleFile" class="">Arquivo Tabela de Veículos</label><input name="arquivo" id="exampleFile" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">Os arquivos aceitos são: PDF, JPEG, JPG, PNG. Para o uso de outros arquivos realize a conversão.</small>
                                                    </div>  
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="col-md-12">
                                            <button class="mt-1 btn btn-primary">Cadastrar</button>
                                        </div> 
                                        <div class="col-md-12">
                                            <br />
                                        </div> 
                                    </div>
                                </form>                               
                            </div>
<!-------------------------------------------------------------- Container Leiloes END --------------------------------------------------------------------->
<!-------------------------------------------------------------- Container Veiculos BEGIN --------------------------------------------------------------------->
                            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                                <form enctype="multipart/form-data" action="assets/functions/insert_veiculo.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Dados do Leilão</h5>
                                                    <div class="position-relative form-group"><label class="">Pátio</label>
                                                        <select class="mb-2 form-control">
                                                            <option value="">Selecione</option>
                                                        </select>
                                                    </div>
                                                    <div class="position-relative form-group"><label class="">Leilão</label>
                                                        <select class="mb-2 form-control">
                                                            <option value="">Selecione</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Dados do Veículo</h5>
                                                    <div class="position-relative form-group"><label class="">Modelo</label><input name="ModeloVeiculo" id="ModeloVeiculo" placeholder="Modelo..." type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">Marca</label>
                                                        <select class="mb-2 form-control">
                                                            <option value="">Selecione</option>
                                                            <option value="Alfa Romeo">Alfa Romeo</option>
                                                            <option value="Audi">Audi</option>
                                                            <option value="BMW">BMW</option>
                                                            <option value="Chevrolet">Chevrolet</option>
                                                            <option value="Citroen">Citroen</option>
                                                            <option value="Dodge">Dodge</option>
                                                            <option value="Fiat">Fiat</option>
                                                            <option value="Ford">Ford</option>
                                                            <option value="Honda">Honda</option>
                                                            <option value="Hyundai">Hyundai</option>
                                                            <option value="Jeep">Jeep</option>
                                                            <option value="Kia">Kia</option>
                                                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                                                            <option value="Mitsubishi">Mitsubishi</option>
                                                            <option value="Nissan">Nissan</option>
                                                            <option value="Peugeot">Peugeot</option>
                                                            <option value="Renault">Renault</option>
                                                            <option value="Suzuki">Suzuki</option>
                                                            <option value="Toyota">Toyota</option>
                                                            <option value="Volkswagen">Volkswagen</option>
                                                            <option value="Volvo">Volvo</option>
                                                            <option value="0">Outras marcas</option>
                                                        </select>
                                                    </div>
                                                    <div class="position-relative form-group"><label class="">Ano</label><input name="AnoVeiculo" id="AnoVeiculo" placeholder="Ano do Modelo..." type="number" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">Placa</label><input name="PlacaVeiculo" id="PlacaVeiculo" placeholder="Placa..." type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label class="">Número do Motor</label><input name="NumeroMotor" id="NumeroMotor" placeholder="Número do Motor..." type="text" class="form-control"></div>
                                                    <div class="position-relative form-group"><label for="exampleFile" class="">Arquivo Baixa</label><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">Os arquivos aceitos são: PDF, JPEG, JPG, PNG. Para o uso de outros arquivos realize a conversão.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Condição do Veículo</h5>
                                                    <div class="position-relative form-group"><label class="">Condição do Veículo</label>
                                                        <fieldset class="position-relative form-group">
                                                            <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio3" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio3">Sucata</label></div>
                                                            <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio4" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio4">Recuperado</label></div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="position-relative form-group"><label class="">Condição do Motor</label>
                                                        <fieldset class="position-relative form-group">
                                                            <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio5" name="customRadio2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio5">Recuperável</label></div>
                                                            <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio6" name="customRadio2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio6">Inservível</label></div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Extra</h5>
                                                    <div class="position-relative form-group">
                                                        <div class="position-relative form-group"><label class="">Valor da Arrematação</label><input name="ValorVeiculo" id="ValorVeiculo" placeholder="Valor..." type="number" class="form-control"></div>
                                                        <div class="position-relative form-group"><label class="">Lote</label><input name="LoteVeiculo" id="LoteVeiculo" placeholder="Lote..." type="number" class="form-control"></div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="col-md-12">
                                            <button class="mt-1 btn btn-primary">Cadastrar</button>
                                        </div> 
                                        <div class="col-md-12">
                                            <br />
                                        </div> 
                                    </div>
                                </form>
                            </div>
<!-------------------------------------------------------------- Container Veiculos END --------------------------------------------------------------------->
                        </div>
                    </div>
 
<!------------------------------------------------------------------------ Rodape BEGIN ------------------------------------------------------------------------->                   
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
<!------------------------------------------------------------------------ Rodape END ------------------------------------------------------------------------->                    
                </div>
<!-------------------------------------------------------------- Area de Trabalho END ------------------------------------------------------------------------->                

        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
