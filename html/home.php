<!DOCTYPE html>
<html>
<head>
	<title>Shalom - Campanha Vocacional 2017</title>

	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- META -->
	<meta name="title" content="Vocacional Shalom - 2017"/>
	<meta name="description" content="Hotsite - Campanha Vocacional Shalom 2017"/>
	<meta name="robots" content="index"/>
	<meta name="keywords" content="Vocacional Shalom 2017"/>
	<!-- Facebook - Open Graph Data -->
	<meta property="og:title" content="Campanha Vocacional Shalom 2017" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content="Campanha Vocacional - Comunidade Católica Shalom - 2017" />
	<meta property="og:site_name" content="Hotsite - Campanha Vocacional 2017" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
	
</head>

<body>

<!--********************************* TOPO ********************************************-->
	
	<div id="backtop">
		<a href="#home" class="glyphicon glyphicon-chevron-up"></a>
	</div>

	<div class="container-fluid bg-amarelo" id="home">
		
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
				<div class="embed-responsive">
					  <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Acomshalom%3Aplaylist%3A3YkEAYu1yc5G8RIj0LKOib" frameborder="0" allowtransparency="true" width="200px" height="100px"></iframe>				 
				</div>

			</div>
		</div>

		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
				<img src="img/lg-vocacional.png" class="img-responsive center-block img-logo-section" alt="Vocacional Shalom 2017">
			</div>			
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs">
				<ul class="list-inline text-center link-menu-superior">
					<li><a class="itemmenu" href="#carisma">CARISMA SHALOM</a></li>
					<li><a class="itemmenu" href="#vocacional">VOCACIONAL</a></li>					
					<li><a class="itemmenu" href="#fotos">FOTOS</a></li>
					<li><a class="itemmenu" href="#videos">VÍDEOS</a></li>
					<li><a class="itemmenu" href="#downloads">DOWNLOADS</a></li>
					<li><a class="itemmenu" href="http://www.comshalom.org/hotsite-vocacional/lib/joomla/">BLOG</a></li>
					<li><a class="itemmenu" href="http://www.comshalom.org/hotsite-vocacional/lib/joomla/index.php/area-do-vocacionado">ÁREA DO VOCACIONADO</a></li>
				</ul>
			</div>

		</div>
		<div class="row">
			<div class="hidden-sm hidden-md hidden-lg col-xs-12">
				<ul class="list-inline text-center link-menu-superior">
					<li><a class="itemmenu" href="#">ÁREA DO VOCACIONADO</a></li>
				</ul>
			</div>

		</div>

	</div>

<!--********************************* APRESENTAÇÃO ************************************-->
<div class="container-fluid bg-amarelo">
		
		<div class="row">
			<div>
				<div class="embed-responsive embed-responsive-16by9">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/D-Pyt8-VIE8?ecver=1&autoplay=0&controls=0&showinfo=0&loop=1&modestbranding=0"></iframe>				 
				</div>
			</div>
		</div>

</div>

<!--********************************* BLOG ********************************************-->

<?php 
	require_once("inc/blog.php");	

	$resultado = recuperaListaPosts();

	if (is_int($resultado)) {
		
	} else {

?>					

<div id="blog" class="container-fluid bg-amarelo">
		
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
				<img src="img/lg-vocacional.png" class="img-responsive center-block img-logo-section" alt="Vocacional Shalom 2017">
			</div>			
		</div>

		<div class="container">

			<div class="row">

				<?php 

					$total = mysqli_num_rows($resultado);

					if ($total > 0) {

						$cont = 0;

						while ($row = $resultado->fetch_assoc()) {

							$cont ++;

							$json = $row["images"];
							$obj = json_decode($json);

							if ($cont == 1) {

								echo '<div class="col-md-5 col-lg-6 hidden-xs hidden-sm">';
								echo '	<div class="featured-article">';
								echo '		<a target="_blank" href="' . DIR_JOOMLA_ARTICLES . $row["id"] . '-' . $row["alias"] . '">';
								echo '			<img src="' . DIR_JOOMLA . $obj->{'image_intro'} . '" alt="" class="thumb">';
								
								echo '		<div class="block-title">';
								echo '			<h2>' . $row["title"] . '</h2>';
								echo '			<p class="by-author"><small>  By '. $row["usuario"] . '</small></p>';
								echo '		</div>';
								echo '		</a>';
								echo '	</div>';	
								echo '</div>';


							} else {

								if ($cont == 2) {
									echo '<div class="col-md-5 col-lg-6 col-sm-12 col-xs-12">';
									echo '<ul class="media-list main-list">';
								}

								echo '<li class="media">';
								echo ' <a class="pull-left" target="_blank" href="' . DIR_JOOMLA_ARTICLES . $row["id"] . '-' . $row["alias"] . '">';
								echo '	 <img class="media-object" src="' . DIR_JOOMLA . $obj->{'image_intro'} . '" width=150 height=90 alt="...">';
								echo '<div class="media-body">';
								echo ' 	<h4 class="media-heading">' . $row["title"] . '</h4>';
								echo '	<p class="by-author"> By '. $row["usuario"] . '</p>';
								echo ' </a>';
								echo '</div>';
								echo ' </li>';

							}

							if ($cont == $total) {
								echo '</ul>';
								echo '</div>';
							}

							}
						}

					

				?>

			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
					<a target="_blank" href="<?php echo DIR_JOOMLA_HOME; ?>">Ver todos os artigos</a>
				</div>
			</div>

			<?php } ?>

		</div>

	</div>

</div>

<!--********************************* CARISMA SHALOM **********************************-->
<div id="carisma" class="container-fluid bg-branco">
		
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
				<img src="img/lg-carisma.png" class="img-responsive center-block img-logo-section" alt="Vocacional Shalom 2017">
			</div>			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
				<h2 class="text-uppercase">O QUE É</h2>
				<span class="text-justify">
					<p>A vivência da Vocação Shalom no seio da Comunidade, é fundamentada na experiência com Jesus Cristo, o Ressuscitado que passou pela Cruz, narrada no Evangelho de João.</p>
					<p>“Ao encontrar os discípulos no Cenáculo, Jesus Ressuscitado lhes diz: Paz a vós (Jo. 20,19), ou seja, Shalom! Em Jesus, esta saudação é uma real comunicação da Paz, isto é, de toda sorte de bênçãos espirituais e materiais, a felicidade perfeita que o Messias nos traz. É, enfim, o anúncio e a doação da salvação plena” (Preâmbulo dos Estatutos). </p>
					<p>Ao pensarmos em vocação precisamos compreender o que significa essa palavra, que com certeza é um dom, uma dádiva divina a qual quis Deus presentear o homem, chamando-o para si, a fim de participar de sua eterna criação. “O esplendor de Deus dá a vida. Consequentemente, os que vêem a Deus recebem a vida.” (Tratado contra as heresias, Santo Irineu, bispo)
					“Vocação” vem do Latim Vocare que significa Chamado. Alguém que me chama para algo, para um determinado propósito, um real sentido de vida, alguém do qual fui formado imagem e semelhança (Gênesis 1,27). “Chamando-me a vida, sopra sobre mim o Hálito de Vida, o sopro divino de Deus que insufla em minhas narinas seu ser vivente.” (Gênesis 2,7). </p>
					<p>Esse é o primeiro e grande chamado divino direcionado ao homem, chamando-o a Vida, a dignidade de ser filho de Deus. Não ser somente criatura de Deus, mas sermos filhos no seu filho, Jesus Cristo. O batismo nos concede, da parte de Deus, essa filiação divina junto a Jesus Cristo, nos consagra para Deus e lava-nos de toda a mancha do pecado original. “Assim como viver sem a vida é impossível, sem a participação de Deus não há vida. Participar de Deus consiste em vê-lo e gozar da sua bondade.” (Tratado contra as heresias, Santo Irineu, bispo)</p>
					<p>O que é uma vocação, segundo Emmir Nogueira: “Uma vocação é um chamado de Deus, um convite de Deus. Só que esse convite não vem em um envelope bonito, não vem pelo Correio, não vem por WhatsApp, não vem na Mídia. Esse convite vem no teu coração e quando você, o seu coração, encontra fora de você aquilo que está dentro do seu coração. Você tem condição de dizer sim, ou seja, uma vocação é uma semente de Deus que ele coloca dentro de você, e um belo dia, Deus se utiliza dessas palavras ou Deus se utiliza de tantas outras coisas para que você diga: Hello! Eu sou desta vocação, eu fui chamado a essa vocação! E a vocação Shalom é isso, a vocação Shalom é uma maneira de viver um chamado de Deus ao qual nós e milhares de outras pessoas no mundo disseram Sim.” (Entrevista ao Festival Halleluya 2016)</p>
					<p>O convite atual da sociedade chama-se tendências, da qual está, hoje, desumanizando a vida, o sentido real e verdadeiro de viver, os valores, as pessoas. Estas, por sua vez estão cada vez mais apegadas a uma cultura do provisório, do prático, do ideal, do ponto onde tudo se torna descartável, tudo perde o real e verdadeiro sabor. Não se tem mais paciência, não se tem mais tempo, não há tempo de parar, de refletir, de ouvir, de falar ou escutar. </p>
					<p>Escutar a Vida que se comunica, ouvir a voz de Deus que está no canto dos pássaros, no movimento das águas, no vento que sopra, no entardecer do sol, na sombra das árvores ou na aurora que desponta toda manhã. É esse o grande e verdadeiro convite da parte de Deus, contemplar através das criaturas, esse convite de retornar a vida a qual ,todos os dias, Ele nos chama. O convite de descobrirmos que em Deus existe um chamado, uma vontade específica a qual Ele nos chama a amar e servir. “Se arde em teu coração o Carisma Shalom, este é o teu caminho para Deus e para a santidade. Não tenha medo de oferecer tua vida a Cristo, pela Igreja, pelos pobres, pelos jovens e por todos os homens.” (Moysés Azevedo)</p>
					<p>Este é o convite ensinado por Cristo, ao chamar os seus e ao chamar o homem de hoje a este retorno para Deus. Este descobrir Cristo Ressuscitado que suscita no coração e sopra sobre nós o Shalom do Pai, a paz da qual é a meta de todo homem, ao testemunharmos como o evangelista nos diz: Cristo é a nossa Paz. (Efésios 2,14)</p>
					</span>
					<h2 class="text-uppercase">Você quer viver esse convite?</h2>
					<p>Se você deseja trilhar um caminho de discernimento vocacional na Comunidade Shalom, sente uma atração ou mesmo um apelo divino de entregar-se ao Reino de Deus segundo a nossa vocação, procure engajar-se em um grupo vocacional na Missão Shalom mais próxima da sua cidade, ou entre em contato com a Assessoria Vocacional para fazer o vocacional à distância.
					O Caminho Vocacional é um período que tem a duração mínima de um ano, tendo início com o Vocacional Aberto (março ou abril de cada ano) – primeiro encontro vocacional, nas cidades onde há a Missão Shalom. – Tendo participado do encontro vocacional, o segundo passo será o plantão vocacional (acompanhamento realizado pelos missionários da comunidade) e o discernimento se este é o tempo de trilhar o caminho vocacional Shalom.</p>
					<p>O vocacionado participará dos encontros vocacionais mensalmente, no intuito de aprofundar o seu chamado por meio de uma vida de intimidade com Deus, através do itinerário espiritual e formativo da Comunidade, o Caminho da Paz e das formações próprias do ano vocacional, mergulhando no conhecimento do Carisma Shalom, no ser Igreja, na missionariedade e na vivência da vida fraterna.
					Durante o ano vocacional, o vocacionado é chamado a fazer uma experiência de 30 dias, vivendo em uma das casas comunitárias como Comunidade de Vida, e como Comunidade de Aliança, viverá por dois meses o ritmo de um missionário da aliança. Experiências que proporcionam o amadurecimento no chamado que o Senhor faz a cada pessoa. A Assessoria Vocacional promove também dois retiros, o de aprofundamento (no mês de agosto ou setembro) e o retiro final (no mês de novembro ou dezembro).</p>
					<p>Todo vocacionado é assistido e orientado por um Acompanhador Vocacional (diretor espiritual) para, junto do Senhor, discernir se realmente é chamado à vocação Shalom ou a uma outra vocação na igreja, se o tempo é esse e se possui amadurecimento necessário para dar o passo concreto em direção ao ingresso no postulantado, da comunidade de vida ou aliança.</p>

				</div>

			</div>


		</div>

</div>

<!--********************************* O TEMA ******************************************-->
<div id="vocacional" class="container-fluid bg-amarelo">
	<div class="row">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				<img src="img/lg-campanha-vocacional.png" class="img-responsive center-block" alt="Vocacional Shalom 2017">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
				<h3 class="hidden-sm hidden-xs">“TEU CHAMADO, TUA VONTADE; MINHA ENTREGA, MINHA FELICIDADE.”</h3>
				<p>Este é o tema do vocacional 2017!</p>
				<p>Se existe alguma dúvida, devo lhe dizer, o ano vocacional não é um tempo normal, este ano não é só mais um entre muitos. Este tempo é único na vida de quem envereda por ele. Um tempo de muitas alegrias, um tempo de profunda conversão, de muitos desafios, de amadurecimento, de questionamentos, de dúvidas, a procura das certezas que só Deus pode nos dar. É O TEMPO DA GRAÇA!
				Unidade, evangelização, comunidade de vida, aliança, pobreza, obediência, castidade, Amor esponsal, Obra Nova, liturgia, Ressuscitado que passou pela Cruz, Francisco de Assis, Tereza de Ávila, comunhão de bens, etc. são alguns conceitos, termos e aspectos sobre a vocação Shalom, dentre todas essas coisas, a principal neste caminho vocacional é a ORAÇÃO! Escolher a melhor parte! Sem ela nada vai para frente e todo caminho vocacional vira um ‘castelo de cartas’ pronto para ruir quando o vento soprar mais forte.</p>
				<p>Se Deus te trouxe aqui, para conhecer o vocacional Shalom, é porque ELE tem grandes planos. Planos que os olhos não viram ou ouvido algum ouviu, é o que Deus tem preparado para você.</p>
				<p>Tudo na comunidade deve ser feito em oração. Assim sendo, nós, da assessoria vocacional, nos colocamos em oração para escutar de Deus qual a sabedoria para os vocacionados Shalom no ano de 2017.</p>
				<p>Dentre algumas coisas, eis alguns pontos daquilo que em oração Deus suscitou:</p>
				<br>
				<ul>
					<li>“Tu és o objeto do Meu amor. ”</li>
					<li>“Tu serás Reconstruído pela misericórdia. ”</li>
					<li>“Tu vais viver uma experiência de Salvação. ”</li>
					<li>“Eu vou te Devolver a vida”. (Passagem do filho pródigo) </li>
					<li>“A Deus tudo é possível. ”</li>
					<li>Casa que é edificada sobre a rocha.</li>
					<li>É um caminho seguro.</li>
					<li>“Eu não desisto de ti! ”</li>
					<li>“O apego às coisas deste mundo te faz infeliz, como fez àquele jovem rico triste.”</li>
					<li>Profecia: “Eu cuido das feridas, do meu povo! Eu cuido das feridas do meu povo.”</li>
				</ul>

				<p>Desta oração e de tudo isto que Deus disse, se formou o tema: “Teu chamado, Tua vontade; minha entrega, minha felicidade! ”
				Deus sabe como conduzir. Ele sabe que sendo nós pecadores e ELE quem está nos chamando, o próprio SENHOR dará um jeito de conquistar o nosso coração.</p>
				<p>Deus tem uma grande obra a realizar neste ano. Abra o seu coração, sua compreensão, deponha suas armas para que Deus possa gritar e você possa ser dócil aquilo que Ele tem para falar. </p>
				<p>Ele já começou a falar. </p>
				<p>Não tenha medo! Vale a pena!</p>
				<p>Shalom!</p>

				<p>Victor Cysne <br>
				Assessor Vocacional</p>
			</div>
		</div>
	</div>
</div>

<!--********************************* IDENTIFICO-ME ***********************************-->

<div class="container-fluid bg-branco">

	<div class="row">
		
		<div class="container">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-justify">
				<h2 class="text-uppercase">IDENTIFICO-ME COMO VOCACIONADO SHALOM?</h2>

				<p>O Vocacionado Shalom é aquele que, tendo feito uma real experiência com o Ressuscitado que passou pela Cruz, ou seja, uma
				profunda experiência de Deus e com sua misericórdia, passa a viver sob o agir desta experiência, buscando uma via de santidade
				cada vez mais autêntica e que neste caminho, sente-se chamado por Deus a uma consagração de vida no Carisma Shalom, com
				toda sua identidade e missão, e formalmente pede para viver um tempo de acompanhamento vocacional no interior da comunidade. </p>
				<p>Tal acompanhamento segue todo um itinerário, visando chegar ao seu objetivo maior, a confirmação ou não da vocação da
				pessoa por meio do parecer (análise do acompanhador e discernimento do qual o vocacionado se propõe viver ao término do
				período vocacional) em relação ao seu ingresso.</p>
				<p>Desejo pela evangelização:</p>
				<p>Aquele que descobriu o amor e a misericórdia de Deus, não pode e não consegue ficar omisso diante da face que se revela a
				misericórdia divina. O desejo por transmitir a verdade que alcançou vai para além de si, ao ponto de se esvaziar, pelo desejo de
				alcançar o outro. Só essa experiência autêntica e concreta com a pessoa de Jesus pode nos levar a esse desejo de transmitir
				Cristo para o outro.</p>
				<p>O chamado de Deus:</p>
				<p>O chamado de Deus é algo essencial dentro deste caminho de discernimento como vocacionado Shalom. A voz de Deus que
				ecoa dentro do coração humano auxilia-o na busca de viver a vontade de Deus. Ao ouvir esta voz interior, o Ser humano ganha
				impulso necessário para bem viver a vontade de Deus e para encarná-la de forma concreta em nosso dia a dia.</p>
				<p>Desejo de algo Mais:</p>
				<p>Existe uma inquietação que é própria daquele que busca a voz de Deus, essa voz divina impele o homem a buscar aquilo do qual
				sua alma sente necessidade.</p>

				<h2 class="text-uppercase">Vocacional a Distância</h2>

				<p>O vocacional a distância é um método diferente, inspirado por Deus. Com ele possibilitamos àqueles que desejam ser missionários
				e descobrir sua vocação ao Carisma Shalom viver essa experiência.</p>
				<p>Este caminho é direcionado para aqueles irmãos e irmãs que, de uma forma ou de outra, conheceram o Carisma Shalom,
				sentem-se atraídos por ele e percebem um chamado de Deus, um convite de Deus à comunidade de Vida. Porém, em sua
				cidade, ou próximo a ela, não existe uma casa de missão da comunidade Shalom que disponha do Caminho vocacional presencial.
				No vocacional a distância todo o processo acontece, como o nome já sugere, a distância, por meio de acompanhamentos,
				formações e utiliza-se diversas ferramentas comunicativas (telefone, e-mail, whatsapp, skype etc.). </p>

			</div>

		</div>


	</div>
	


</div>

<!--********************************* O SENHOR NOSSO DEUS *****************************-->
<div class="container-fluid bg-amarelo">
		
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
				<img src="img/lg-carisma-pb.png" class="img-responsive center-block img-logo-section" alt="Vocacional Shalom 2017">
			</div>			
		</div>
		<div class="container">
			<div class="row">
				<div>
				<blockquote class="blockquote-reverse ">
				  <p>“O Senhor nosso Deus, que merece todo amor do mundo, realiza uma obra no meio de nós: uma obra nova, um caminho novo. Este caminho é real e cada dia que passa eu sinto concretizar-se mais fortemente em meu coração. 
						É algo novo, é algo maravilhoso. 
						Sinto como Deus querendo presentear ao mundo mais uma manifestação de Seu poder criador” </p>
				  <footer class="text-right">Escrito Obra Nova</footer>
				</blockquote>

					<p>Em cada tempo, o Espírito Santo concede à Igreja graças necessárias para que ela responda aos desafios contemporâneos. 
					Carisma é um desses dons divinos derramados sobre a Igreja para renová-la e atualizar a vivência do Evangelho. 
					Assim, foi manifestado ao mundo o Carisma Shalom, que desabrochou no coração de Moysés Azevedo durante encontro com o 
					Papa João Paulo II, em 1980. Deus chamou pessoas a assumir essa graça em suas vidas, dando-lhes uma vocação 
					específica: Shalom. </p>
					<p>A vivência da Vocação Shalom no seio da Comunidade é fundamentada na experiência com Jesus Cristo, o Ressuscitado 
					que passou pela Cruz, narrada no Evangelho de João. </p>
					<p>“Ao encontrar os discípulos no Cenáculo, Jesus Ressuscitado lhes diz: Paz a vós (Jo. 20,19), ou seja, Shalom! 
					Em Jesus, esta saudação é uma real comunicação da Paz, isto é, de toda sorte de bênçãos espirituais e materiais, 
					a felicidade perfeita que o Messias nos traz. É, enfim, o anúncio e a doação da salvação plena” (Preâmbulo dos Estatutos). </p>
					<p>Jesus é o Shalom do Pai para o mundo, a verdadeira e única Paz que a humanidade pode ter. Como os discípulos de Cristo 
					foram enviados por Ele, naquela ocasião, para implantar a Paz no coração dos homens, os vocacionados são chamados a 
					anunciá-la com a vida e o testemunho. “Ser Shalom” significa, pelo poder do Espírito Santo, ser discípulo e ministro 
					da Paz e levar o próprio Cristo a quem por Ele espera. </p>
					<p>Para aqueles que foram chamados a corresponder à Vocação, Deus concede o caminho da Contemplação, Unidade e Evangelização.</p>
					<p>Da Contemplação do Ressuscitado, que sopra sobre os discípulos, brota a força da Evangelização. Assim inspirada, 
					a Comunidade empreende esforços para anunciar o mesmo e único Evangelho de Nosso Senhor Jesus Cristo com eficácia, 
					ousadia e criatividade. Para viver a Vocação é necessário, ainda, mergulhar no espírito da caridade segundo os moldes 
					das primeiras comunidades cristãs, refletindo a Unidade da comunhão amorosa do Pai, do Filho e do Espírito Santo.</p>


				</div>


			</div>

		</div>

</div>

<!--********************************* FOTOS *******************************************-->

<div id="fotos" class="container-fluid bg-branco">
		
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
				<img src="img/lg-fotos.png" class="img-responsive center-block img-logo-section" alt="Vocacional Shalom 2017">
			</div>			
		</div>

		<div class="container">
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block">
				
				<div class="span8">
						<div id="CarouselImg" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators hidden-xs hidden-sm">
								<li data-target="#CarouselImg" data-slide-to="0" class="active"></li>
								<li data-target="#CarouselImg" data-slide-to="1" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="2" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="3" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="4" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="5" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="6" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="7" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="8" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="9" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="10" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="11" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="12" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="13" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="14" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="15" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="16" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="17" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="18" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="19" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="20" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="21" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="22" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="23" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="24" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="25" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="26" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="27" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="28" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="29" class=""></li>
								<li data-target="#CarouselImg" data-slide-to="30" class=""></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img src="img/fotos/foto001.JPG" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto002.JPG" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto003.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto004.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto005.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto006.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto007.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto008.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto009.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto010.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto011.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto012.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto013.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto014.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto015.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto016.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto017.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto018.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto019.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto020.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto021.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto022.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto023.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto024.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto025.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto026.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto027.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto028.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto029.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto030.jpg" class="img-responsive img-carrossel">
								</div>
								<div class="item">
									<img src="img/fotos/foto031.jpg" class="img-responsive img-carrossel">
								</div>
							</div>
							<a class="left carousel-control" href="#CarouselImg" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
							<a class="right carousel-control" href="#CarouselImg" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</div>

			</div>

		</div>

</div>
<!--********************************* VIDEOS *******************************************-->
<div id="videos" class="container-fluid bg-amarelo">
		
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
				<img src="img/lg-videos.png" class="img-responsive center-block img-logo-section" alt="Vocacional Shalom 2017">
			</div>			
		</div>

		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
					<div class="span8">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators hidden-xs hidden-sm">
								<li data-target="#myCarousel" data-slide-to="0" class=""></li>
								<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="2" class=""></li>
								<li data-target="#myCarousel" data-slide-to="3" class=""></li>
								<li data-target="#myCarousel" data-slide-to="4" class=""></li>
								<li data-target="#myCarousel" data-slide-to="5" class=""></li>								
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/D-Pyt8-VIE8?controls=0" frameborder="0" allowfullscreen=""></iframe>
									</div>
								</div>
								<div class="item">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/F0KvtrIu8vY?controls=0" frameborder="0" allowfullscreen=""></iframe>
									</div>
								</div>
								<div class="item">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/0EKLIhHMT7A?controls=0" frameborder="0" allowfullscreen=""></iframe>
									</div>
								</div>
								<div class="item">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/Cc9lSpZzohI?controls=0" frameborder="0" allowfullscreen=""></iframe>
									</div>
								</div>
								<div class="item">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/vyu03NCOgEY?controls=0" frameborder="0" allowfullscreen=""></iframe>
									</div>
								</div>
								<div class="item">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/7KlM0H5dIsE?controls=0" frameborder="0" allowfullscreen=""></iframe>
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>

</div>

<!--********************************* DOWNLOADS ****************************************-->
<div id="downloads" class="container-fluid bg-branco">
		
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
				<img src="img/lg-downloads.png" class="img-responsive center-block img-logo-section" alt="Vocacional Shalom 2017">
			</div>			
		</div>

		<div class="container">
			<div class="row">
				
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<a class="img-downloads" href="downloads/WALLPAPERCELULAR_1.png" download>
						<img src="downloads/WALLPAPERCELULAR_1.png" class="img-responsive">
					</a>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<a class="img-downloads" href="downloads/WALLPAPERCELULAR_2.png" download>
						<img src="downloads/WALLPAPERCELULAR_2.png" class="img-responsive">
					</a>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<a class="img-downloads" href="downloads/WALLPAPERCELULAR_3.png" download>
						<img src="downloads/WALLPAPERCELULAR_3.png" class="img-responsive">
					</a>
				</div>

			</div>

			<div class="row">
				
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<a class="img-downloads" href="downloads/WALLPAPERCELULAR_4.png" download>
						<img src="downloads/WALLPAPERCELULAR_4.png" class="img-responsive">
					</a>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<a class="img-downloads" href="downloads/WALLPAPERCELULAR_5.png" download>
						<img src="downloads/WALLPAPERCELULAR_5.png" class="img-responsive">
					</a>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<a class="img-downloads" href="downloads/CARTAZ_3.png" download>
						<img src="downloads/CARTAZ_3.png" class="img-responsive">
					</a>
				</div>

			</div>

			<div class="row">
				
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<a class="img-downloads" href="downloads/WALLPAPERCELULAR_7.png" download>
						<img src="downloads/WALLPAPERCELULAR_7.png" class="img-responsive">
					</a>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<a class="img-downloads" href="downloads/CARTAZ_1.png" download>
						<img src="downloads/CARTAZ_1.png" class="img-responsive">
					</a>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<a class="img-downloads" href="downloads/CARTAZ_2.png" download>
						<img src="downloads/CARTAZ_2.png" class="img-responsive">
					</a>
				</div>

			</div>


		</div>

</div>

<!--********************************* RODAPE *******************************************-->

<div class="container-fluid bg-marrom">
		
		<div class="row ">
			<div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
				<ul class="list-inline text-center list-rede-social">
					<li class="rede-social">
						<a href="https://www.fb.com/comshalom" class="" target="_blank" >
							<i class="fa fa-facebook-square fa-3x " aria-hidden="true" ></i>
						</a> 
					</li>
						
					<li class="rede-social">
						<a href="https://twitter.com/comshalom"  class="" target="_blank">
							<i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
						</a>
					</li>
					<li class="rede-social">
						<a href="https://www.instagram.com/comshalom"  class="" target="_blank">
							<i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
						</a>
					</li>
					<li class="rede-social">
						<a href="https://www.snapchat.com/comshalom"  class="" target="_blank">
							<i class="fa fa-snapchat-ghost fa-3x" aria-hidden="true"></i>
						</a>
					</li>
					<li class="rede-social">
						<a href="https://www.youtube.com/user/comshalom"  class="" target="_blank">
							<i class="fa fa-youtube-play fa-3x" aria-hidden="true"></i>
						</a>
					</li>

				</ul>
				
			</div>		
			
			<div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 ">
				<span class="center-block">
					<a href="http://comunicacaosh.wixsite.com/shalom35anos">
						<img src="img/lg-convencao.png" class="img-responsive center-block img-convencao" alt="Convenção 35 Anos Shalom">
					</a>
				</span>
				
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 ">
				<ul class="list-inline text-center list-developers text-uppercase">
					<li>
						<span>Desenvolvido por: </span>
						<a href="http://www.daniel.moreira.nom.br" target="_blank">Daniel Moreira</a>						
						<a href="https://br.linkedin.com/in/jônatan-ramos-35053642" target="_blank"> / Jônatan Ramos</a>
					</li>
				</ul>
			</div>
		</div>

</div>

	<!-- JAVASCRIPT -->
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>