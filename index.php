<?php get_header(); ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php
         $args = array('post_type'=> 'slider', 'showposts' => 2 );
         $my_slider = get_posts ( $args );
         if ($my_slider) : foreach ($my_slider as $post) : setup_postdata ($post);
         $cont = 0 ;
       ?>

        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $cont; ?>" <?php if($cont == 0): ?> class="active" <?php endif; ?> ></li>

        <?php
        $cont ++ ;
         endforeach;
         endif;
        ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
     <?php
        $conta = 0;
        if ($my_slider) : foreach ($my_slider as $post) : setup_postdata ($post);
      ?>
        <div class="item  <?php if($conta == 0) echo "active"; ?>">
            <?php the_post_thumbnail('full'); ?>
            <div class="carousel-caption">
              <!--<h2> tem que estar dentro das tags de php  ( the_title();) titulo_aqui </h2>-->
            </div>
        </div>
   <?php
    $conta ++;
    endforeach;
    endif;
   ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div id="caixas">
  <div class="container">
      <h2 class="text-center">Produtos e Serviços</h2>
    <div class="row">
            <div class="h-line">&nbsp;<!-- linha de fundo das imagens redondas--></div>
      <div  class="col-sm-4">
        <div class="consult text-center">
           <span class="caixas-icon iconsult">&nbsp;</span>
          <h4 class="heading">Consultoria Comercial</h4>
            <div class="textos-sect">
             <b class="title_sect">Novos negócios:</b>
                <br>
                <br>
                <p> Pesquisas e análises de mercados específicos ou potenciais para implantações de
                novos negócios considerando os aspectos estratégicos e lucratividade;
                Verificação de áreas disponíveis às implantações e seus valores de mercado;
                nálise da legislação local, estadual e federal e recomendações;
                Pesquisa e indicações dos melhores pacotes de atividades para os empreendimentos;
                Participação nas elaborações dos projetos arquitetônicos e construtivos;
                Análise de orçamentos das construções;
                Indicação dos melhores fornecedores.</p>
            </div>
          <a href="consultoria.html" class="btn btn-info" role="button">Saiba Mais</a>
        </div>
      </div>


    <div  class="col-sm-4">
        <div class="consult text-center">
           <span class="caixas-icon iassj">&nbsp;</span>
          <h4 class="heading">Assessoria Juridica</h4>
              <div class="textos-sect">
                  <b class="title_sect">Adequações às exigências legais:</b>
                   <br>
                   <br>
                    <p>
                    Radiografia do empreendimento para atendimento à legislação dos órgãos fiscalizadores
                    (ANP,  Procons, Ministérios públicos, órgãos ambientais, ABNT, IPEM, Secretarias de fazendas).</p>
                  <b class="title_sect">Negociações com fornecedores:</b>
                    <p>
                    Negociações de preços de compras, contratos e financiamentos, reformas, adequação ambiental,
                    reformas, equipamentos e implantações de programas de marketing.
                    </p>
                  <b class="title_sect">Treinamentos:</b>
                    <p>
                    Diagnóstico das necessidades e aplicações. teste
                    </p>
              </div>
            <a href="ass_consu.html" class="btn btn-info" role="button">Saiba Mais</a>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="assj text-center">
           <span class="caixas-icon produ">&nbsp;</span>
          <h4 class="heading" >Produtos</h4>
          <div class="textos-sect">
                        <p>
                        Adquira produtos e serviços em condições diferenciadas para o seu posto,
                        revenda de GLP, TRR ou atacado de lubrificantes.
                        A MXM é gestora do programa Sindisoluções da Fecombustíveis (Federação do Comércio de Combustíveis e de Lubrificantes),
                        que através de parcerias com as mais renomadas empresas fornecedoras dos segmentos,
                        disponibiliza para o varejo de combustíveis e de lubrificantes,
                        uma extensa gama de itens para atender às mais diversas necessidades do setor.
                        As compras, solicitações de orçamentos e acessos a ofertas coletivas,
                        são efetuados com extrema facilidade em um portal na internet construído
                        especialmente para a finalidade.
                        </p>
                    </div>
          <a href="https://www.sindisolucoes.com.br" target="_blank" class="btn btn-info" role="button">Saiba Mais</a>
        </div>
      </div>

    </div>
  </div>
</div>


<!-- Noticias  -->
    <div id="noti">
    	<div class="container">
          <h2 class="notics">Notícias</h2>

<div class="row">

  <?php
     $args = array('post_type'=>'post', 'showposts' => 3 );
     $my_posts = get_posts( $args );
     if ($my_posts) : foreach($my_posts as $post) : setup_postdata ( $post );
  ?>


  <div class="col-md-4">

   <div class="media">

       <?php  the_post_thumbnail(false,  array('class' => 'img-responsive')); ?>

     <div class="media-body">
       <h4 class="media-heading"><?php the_title(); ?></h4>
       <p>
       <?php the_excerpt(); ?>
       </p>
     </div>
    </div>

   </div>

<?php
endforeach;
endif;
 ?>

</div>

    	</div><!--end container-->
    </div><!--end noticias ou noti-->



    <div id="parce">
    	<div class="container">
           <h3 class="tpc">Links Uteis</h3>

    		<div class="row">
    			<div class="col-sm-3">
    				<div >
                        <img class="img1" src="<?php bloginfo('template_directory'); ?>/assets/img/anp_logos.png" alt="anap">
    				 </div>
    			</div>

                <div class="col-sm-3">
    				<div >
                        <img class="img2" src="<?php bloginfo('template_directory'); ?>/assets/img/logo_fecomb.png" alt="fecombustiveis">
    				 </div>
    			</div>

    			<div class="col-sm-3">
    				<div >
                        <img class="img3" src="<?php bloginfo('template_directory'); ?>/assets/img/sindi_solu.png" alt="sindisolucoes">
    				 </div>
    			</div>

<div class="col-sm-3">
    				<div >
                        <img class="img4" src="<?php bloginfo('template_directory'); ?>/assets/img/sindi_solu.png" alt="sind_alter">
    				 </div>
    			</div>


    		</div>
    	</div>
    </div>



<?php get_footer(); ?>
