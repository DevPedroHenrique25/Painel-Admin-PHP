<?php
    $url = explode('/',$_GET['url']);
    if(!isset($url[2])){


?>

<section class="header-noticias">
    <div class="center">
        <h2><i class="fa-solid fa-bell"></i></h2>
        <h2>Acompanhe as últimas notícias do portal</h2>
    </div><!--center-->
    
</section>

<section class="container-portal">
    <div class="sidebar">
        <div class="box-content-sidebar">
            <h3><i class="fa-solid fa-magnifying-glass"></i> Realizar uma busca</h3>
            <form>
                <input type="text" name="busca" placeholder="O que você deseja?"/>
                <input type="submit" name="acao" value="Pesquisar"/>
            </form>
        </div><!--box-content-sidebar-->


        <div class="box-content-sidebar">
            <h3><i class="fa-solid fa-list"></i> Selecione a categoria</h3>
            <form>
                <select name="categoria">
                    <option value="esportes">Esportes</option>
                    <option value="esportes">Geral</option>
                </select>
                
            </form>
        </div><!--box-content-sidebar-->


        <div class="box-content-sidebar">
            <h3><i class="fa-solid fa-user"></i> Sobre o autor</h3>
            <div class="autor-box-portal">
                <div class="box-img-autor"></div>
                <div class="texto-autor-portal text-center">
                    <h3>Pedro Henrique</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis metus, suscipit sit amet nisl in, finibus aliquet nisi. Donec ultricies elementum sollicitudin. Phasellus finibus volutpat nunc, a semper lectus rhoncus a. Integer congue libero vel lacinia finibus. Fusce a nulla id mi elementum finibus eget in arcu. Integer at tellus pulvinar, porta dui sed, auctor felis. Aliquam feugiat felis at est lobortis, nec vehicula ipsum dignissim. Donec id magna ipsum. Maecenas lacus mauris, porttitor et lacinia quis, tincidunt sit amet turpis.</p>

                </div><!--texto-autor-portal-->
            </div><!--autor-box-portal-->
        </div><!--box-content-sidebar-->
    </div><!--sidebar-->

    <div class="conteudo-portal">
        <div class="header-conteudo-portal">
            <h2>Visualizando Todos os Posts</h2>
            <h2>Visualização Posts em <span>Esportes</span></h2>
        </div><!--conteudo-portal-->
        <?php 
            for($i = 0; $i < 5; $i++){
        ?>
        <div class="box-single-conteudo">
            <h2>13/02/2026 - Conheça os eleitos para ga...</h2>
            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
            <a href="<?php INCLUDE_PATH;?>noticias/esportes/nome-do-post">Leia mais</a>
        </div><!--box-single-conteudo-->

        <?php }  ?>
           <div class="paginator">
                <a class="active-page" href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
           </div><!--paginator-->
    </div><!--conteudo-portal-->
    <div class="clear"></div>
</section><!--container-portal-->

<?php }else{
    include('noticia_single.php');


 }?>

