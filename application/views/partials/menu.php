    <!-- MENU INFERIOR -->

    <div class="mainbar">
      <div class="container">
        <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
        <div class="mainbar-collapse collapse">
          <ul class="nav navbar-nav mainbar-nav">
            <li class="<?php echo (isset($dashboard)) ? $dashboard : ""; ?> box-menu-nav">
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i>
                Dashboard
              </a>
            </li>
            <li class="<?php echo (isset($vendas)) ? $vendas : ""; ?> dropdown box-menu-nav">
              <a href="#about" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                <i class="fa fa-shopping-cart"></i>
                Vendas
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">   
                <li class="dropdown-header dropdown-submenu">
                  <a tabindex="-1" href="#">
                    Produtos
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>vendas/propostascomerciaisvenda"><i class="fa fa-file-text nav-icon"></i> Propostas Comerciais</a></li>
                    <li><a href="<?php echo base_url(); ?>vendas/pedidosdevenda"><i class="fa fa-file-text nav-icon"></i> Pedidos de Venda</a></li>
                    <li><a href="<?php echo base_url(); ?>vendas/vendadeprodutos"><i class="fa fa-file-text nav-icon"></i> Venda de Produtos</a></li>
                    <li><a href="<?php echo base_url(); ?>vendas/emitirnfe"><i class="fa fa-print nav-icon"></i> Emitir NF-e</a></li>
                    <li><a href="<?php echo base_url(); ?>vendas/produtos"><i class="fa fa-cubes nav-icon"></i> Produtos</a></li>
                  </ul>
                </li>
                
                <li class="divider"></li>
                
                <li class="dropdown-header dropdown-submenu">
                  <a tabindex="-1" href="#">
                    Servi�os
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>vendas/propostascomerciaisservico"><i class="fa fa-file-text nav-icon"></i> Propostas Comerciais</a></li>
                    <li><a href="<?php echo base_url(); ?>vendas/vendadeservico"><i class="fa fa-file-text nav-icon"></i> Vendas de Servi�o</a></li>
                    <li><a href="<?php echo base_url(); ?>vendas/emitirnfse"><i class="fa fa-print nav-icon"></i> Emitir NFS-e</a></li>
                    <li><a href="<?php echo base_url(); ?>vendas/contratosdevenda"><i class="fa fa-file-text nav-icon"></i> Contratos de Venda</a></li>
                    <li><a href="<?php echo base_url(); ?>vendas/servicos"><i class="fa fa-file-text nav-icon"></i> Servi�os</a></li>
                  </ul>
                </li>
                
                <li class="divider"></li>
                
                <li class="dropdown-header dropdown-submenu">
                  <a tabindex="-1" href="#">
                    Cadastros
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="./ui-typography.html"><i class="fa fa-pencil nav-icon"></i> Cliente</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-pencil nav-icon"></i> Produto</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-pencil nav-icon"></i> Fornecedor</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-pencil nav-icon"></i> Transportadora</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-pencil nav-icon"></i> Servi�o</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-pencil nav-icon"></i> Lista de Pre�o</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown box-menu-nav">
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                <i class="fa fa-dropbox"></i> 
                Estoque
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">   
                <li class="dropdown-header dropdown-submenu">
                  <a tabindex="-1" href="#">
                    Compras
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="./ui-buttons.html"><i class="fa fa-plus nav-icon"></i> Pedidos de Compra</a></li>
                    <li><a href="./ui-tabs.html"><i class="fa fa-plus nav-icon"></i> Compras</a></li>
                    <li><a href="./ui-notifications.html"><i class="fa fa-print nav-icon"></i> Emitir NF-e de Entrada</a></li>
                    <li><a href="./ui-sliders.html"><i class="fa fa-plus nav-icon"></i> Produtos</a></li>
                  </ul>
                </li>
                
                <li class="divider"></li>
                
                <li class="dropdown-header dropdown-submenu">
                  <a tabindex="-1" href="#">
                    Cadastros
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="./ui-typography.html"><i class="fa fa-pencil nav-icon"></i> Produtos</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-pencil nav-icon"></i> Fornecedores</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-pencil nav-icon"></i> Transportadora</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-pencil nav-icon"></i> Estoque</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown box-menu-nav">
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                <i class="fa fa-money"></i>
                Financeiro
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">   
                <li class="dropdown-header dropdown-submenu">
                  <a tabindex="-1" href="#">
                    Movimenta��es
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="./ui-buttons.html"><i class="fa fa-file-text nav-icon"></i> Extrato</a></li>
                    <li><a href="./ui-tabs.html"><i class="fa fa-file-text nav-icon"></i> Contas a Pagar</a></li>
                    <li><a href="./ui-notifications.html"><i class="fa fa-file-text nav-icon"></i> Contas a Receber</a></li>
                    <li><a href="./ui-sliders.html"><i class="fa fa-file-text nav-icon"></i> Fluxo de Caixa</a></li>
                    <li><a href="./ui-sliders.html"><i class="fa fa-file-text nav-icon"></i> Importar Extrato</a></li>
                  </ul>
                </li>
                
                <li class="divider"></li>
                
                <li class="dropdown-header dropdown-submenu">
                  <a tabindex="-1" href="#">
                    Organizar
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="./ui-typography.html"><i class="fa fa-file-text nav-icon"></i> Contas Banc�rias</a></li>
                  </ul>
                </li>
              </ul>
            </li>  
            <li class="dropdown box-menu-nav">
              <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                <i class="fa fa-file-text"></i>
                Relat�rios
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">   
                <li class="dropdown-header dropdown-submenu">
                  <a tabindex="-1" href="#">
                    Financeiro
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="./ui-buttons.html"><i class="fa fa-file-text nav-icon"></i> Demonstrativo</a></li>
                    <li><a href="./ui-tabs.html"><i class="fa fa-file-text nav-icon"></i> An�lise de Pagamento</a></li>
                    <li><a href="./ui-notifications.html"><i class="fa fa-file-text nav-icon"></i> An�lise centro de custo</a></li>
                    <li><a href="./ui-sliders.html"><i class="fa fa-file-text nav-icon"></i> Lan�amntos Financeiros</a></li>
                  </ul>
                </li>
                
                <li class="divider"></li>
                
                <li class="dropdown-header dropdown-submenu">
                  <a tabindex="-1" href="#">
                    Vendas
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="./ui-typography.html"><i class="fa fa-file-text nav-icon"></i> Faturamento por Cliente</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-file-text nav-icon"></i> Produtos mais vendidos</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-file-text nav-icon"></i> Vendas por Cliente</a></li>
                    <li><a href="./ui-typography.html"><i class="fa fa-file-text nav-icon"></i> Clientes</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown box-menu-nav">
              <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                <i class="fa fa-desktop"></i>
                Sistema
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu"> 
                <li><a href="./ui-buttons.html"><i class="fa fa-user nav-icon"></i> Usu�rios</a></li>
                <li><a href="./ui-tabs.html"><i class="fa fa-rocket nav-icon"></i> Meu Plano</a></li>
                <li><a href="./ui-notifications.html"><i class="fa fa-star nav-icon"></i> Marca da Empresa</a></li>
                <li><a href="./ui-notifications.html"><i class="fa fa-building nav-icon"></i> Dados da Empresa</a></li>
                <li><a href="./ui-sliders.html"><i class="fa fa-check nav-icon"></i> Certificado Digital</a></li>
                <li><a href="./ui-sliders.html"><i class="fa fa-wrench nav-icon"></i> Configura��es Gerais</a></li>
              </ul>
            </li>
            <li class="dropdown box-menu-nav">
              <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                <i class="fa fa-support"></i>
                Suporte
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu"> 
                <li><a href="./ui-buttons.html"><i class="fa fa-comments nav-icon"></i> Chat</a></li>
                <li><a href="./ui-tabs.html"><i class="fa fa-skype nav-icon"></i> Skype</a></li>
                <li><a href="./ui-notifications.html"><i class="fa fa-envelope nav-icon"></i> Email</a></li>
                <li><a href="./ui-notifications.html"><i class="fa fa-phone nav-icon"></i> Telefone</a></li>
              </ul>
            </li>
          </ul>
        </div> 
      </div> 
    </div>