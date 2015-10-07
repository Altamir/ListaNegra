<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <meta charset="UTF-8">
        <title>Lista Negra - Hostel</title>
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.indigo-deep_purple.min.css" /> 
        <script	src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
        <link rel="stylesheet" 	href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
    
    
    
    
    	<!-- Uses a header that contracts as the page scrolls down. -->
    	<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button">
    		<header class="mdl-layout__header mdl-layout__header--waterfall">
    			<!-- Top row, always visible -->
    			<div class="mdl-layout__header-row">
    				<!-- Title -->
    				<span class="mdl-layout-title">Lista Negra </span>
    				<div class="mdl-layout-spacer"></div>
    				<div
    					class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                      mdl-textfield--floating-label mdl-textfield--align-right">
    					<label class="mdl-button mdl-js-button mdl-button--icon"
    						for="waterfall-exp"> <i class="material-icons">search</i>
    					</label>
    					<div class="mdl-textfield__expandable-holder">
    						<input class="mdl-textfield__input" type="text" name="sample"
    							id="waterfall-exp" />
    					</div>
    				</div>
    			</div>
     		</header>
    		<div class="mdl-layout__drawer">
    			<span class="mdl-layout-title">Lista Negra - Hostel</span>
    			<nav class="mdl-navigation">
    				<a class="mdl-navigation__link" href="">Pesquisar</a>
    				<a class="mdl-navigation__link" href="">Cadastrar Hospede</a>
    				<a class="mdl-navigation__link" href="hostels">Listar Hostels</a>
    				<a class="mdl-navigation__link" href="logout">Sair</a>
    			</nav>
    		</div>
    		<main class="mdl-layout__content">
    		<div class="page-content">
    		    
    			
    			 @yield('content')
    			 
    		</div>
    		</main>
    	</div>
    </body>
</html>