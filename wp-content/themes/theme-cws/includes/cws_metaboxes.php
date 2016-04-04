<?php
/**
 * Metaboxes
 *
 * @author  Quentin MATYAS
 */

require_once('qm_cpt.php');

class qmPage extends qmCPT{
  public $cpt_name = 'page';

  /**
    * Instanciate the class and add filters and actions
    */
  public function __construct(){
      add_action('init', array($this, 'init'));
      add_action('save_post', array($this, 'meta_box_save'));
      add_action('add_meta_boxes', array($this, 'meta_box_cb'));
      add_action( 'admin_head', array($this, 'hide_editor') );
  }

  public function init(){
    if ($_GET['post'] == $this->get_id_by_slug('accueil')){
      $this->addMetaBoxes('cws-intro', 'Editez la page Accueil');
    } elseif ($_GET['post'] == $this->get_id_by_slug('qui-sommes-nous')){
      $this->addMetaBoxes('cws-about', 'Editez la colonne gauche');
      $this->addMetaBoxes('cws-about-right', 'Editez la colonne droite');
      } elseif ($_GET['post'] == $this->get_id_by_slug('entreprises')){
      $this->addMetaBoxes('cws-entreprises', 'Editez la colonne gauche');
      $this->addMetaBoxes('cws-espace-entreprise', 'Editez la colonne droite');
      } elseif ($_GET['post'] == $this->get_id_by_slug('particuliers')){
      $this->addMetaBoxes('cws-particuliers', 'Editez les liens');
      $this->addMetaBoxes('cws-espace-patrimoine', 'Editez la colonne droite');
      } elseif ($_GET['post'] == $this->get_id_by_slug('financement-complexe')){
      $this->addMetaBoxes('cws-financement-complexe', 'Editez la colonne gauche');
      $this->addMetaBoxes('cws-espace-financement', 'Editez la colonne droite');
      } elseif ($_GET['post'] == $this->get_id_by_slug('gestion-actifs')){
      $this->addMetaBoxes('cws-actif-entreprise', 'Editez la colonne gauche');
      $this->addMetaBoxes('cws-espace-actif', 'Editez la colonne droite');
      } elseif ($_GET['post'] == $this->get_id_by_slug('banques-et-institutions-financieres')){
      $this->addMetaBoxes('cws-institution-financiere', 'Editez la colonne gauche');
      $this->addMetaBoxes('cws-espace-institution', 'Editez la colonne droite');
      } elseif ($_GET['post'] == $this->get_id_by_slug('financement-projets-immobiliers')){
      $this->addMetaBoxes('cws-projets-immobiliers', 'Editez la colonne gauche');
      $this->addMetaBoxes('cws-espace-immobiliers', 'Editez la colonne droite');
      } elseif ($_GET['post'] == $this->get_id_by_slug('gestion-actifs-financiers')){
      $this->addMetaBoxes('cws-actifs-financiers', 'Editez la colonne gauche');
      $this->addMetaBoxes('cws-espace-financier', 'Editez la colonne droite');
      } elseif ($_GET['post'] == $this->get_id_by_slug('constitution-dun-patrimoine-artistique')){
      $this->addMetaBoxes('cws-patrimoine-artistique', 'Editez la colonne gauche');
      $this->addMetaBoxes('cws-espace-patrimoine-artistique', 'Editez la colonne droite');
      } elseif ($_GET['post'] == $this->get_id_by_slug('contact')){
      $this->addMetaBoxes('cws-contact', 'Editez la section contact');
      } 

    $this->addField('cws_intro_left', 'credit & wealth solutions :', 'cws-intro', 'wysiwyg');
    $this->addField('cws_intro_right', 'Texte droit :', 'cws-intro', 'wysiwyg');

    $this->addField('cws_about_top', 'Texte haut :', 'cws-about', 'wysiwyg');
    $this->addField('cws_about_middle', 'Texte milieu :', 'cws-about', 'wysiwyg');
    $this->addField('cws_about_bottom', 'Texte bas :', 'cws-about', 'wysiwyg');
    $this->addField('cws_about_right', 'Texte :', 'cws-about-right', 'wysiwyg');

    $this->addField('cws_entreprises_top', 'Texte haut :', 'cws-entreprises', 'wysiwyg');
    $this->addField('cws_entreprises_middle', 'Texte milieu :', 'cws-entreprises', 'wysiwyg');
    $this->addField('cws_entreprises_bottom', 'Texte bas:', 'cws-entreprises', 'wysiwyg');

    $this->addField('cws_particuliers_top', 'Texte haut:', 'cws-particuliers', 'wysiwyg');
    $this->addField('cws_particuliers_middle', 'Texte milieu:', 'cws-particuliers', 'wysiwyg');
    $this->addField('cws_particuliers_bottom', 'Texte bas:', 'cws-particuliers', 'wysiwyg');

    $this->addField('cws_espace_entreprise', 'Texte :', 'cws-espace-entreprise', 'wysiwyg');
    $this->addField('cws_espace_patrimoine', 'Texte :', 'cws-espace-patrimoine', 'wysiwyg');

    $this->addField('cws_financement_complexe', 'Texte :', 'cws-financement-complexe', 'wysiwyg');
    $this->addField('cws_espace_financement', 'Texte :', 'cws-espace-financement', 'wysiwyg');

    $this->addField('cws_actif_entreprise', 'Texte :', 'cws-actif-entreprise', 'wysiwyg');
    $this->addField('cws_espace_actif', 'Texte :', 'cws-espace-actif', 'wysiwyg');

    $this->addField('cws_institution_financiere', 'Texte :', 'cws-institution-financiere', 'wysiwyg');
    $this->addField('cws_espace_institution', 'Texte :', 'cws-espace-institution', 'wysiwyg');

    $this->addField('cws_projets_immobiliers', 'Texte :', 'cws-projets-immobiliers', 'wysiwyg');
    $this->addField('cws_espace_immobilier', 'Texte :', 'cws-espace-immobiliers', 'wysiwyg');

    $this->addField('cws_actifs_financiers', 'Texte :', 'cws-actifs-financiers', 'wysiwyg');
    $this->addField('cws_espace_financier', 'Texte :', 'cws-espace-financier', 'wysiwyg');

    $this->addField('cws_patrimoine_artistique', 'Texte :', 'cws-patrimoine-artistique', 'wysiwyg');
    $this->addField('cws_espace_patrimoine_artistique', 'Texte :', 'cws-espace-patrimoine-artistique', 'wysiwyg');

    $this->addField('cws_contact', 'Texte :', 'cws-contact', 'wysiwyg');

  }

  public static function get_id_by_slug($page_slug){
    $page = get_page_by_path($page_slug);
      if ($page) {
        return $page->ID;
      } else {
        return null;
      }
  }

  public static function hide_editor() {
    global $post;
      $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
      if( !isset( $post_id ) ) return;

      $pagename = get_the_title($post_id);
      if($pagename == 'Accueil' || $pagename == 'Qui sommes-nous' 
        || $pagename == 'Particuliers' || $pagename == 'Entreprises' 
        || $pagename == 'Banques et institutions financières' 
        || $pagename == 'Gestion actifs financiers' || $pagename == "Constitution patrimoine artistique"
        || $pagename == 'Contact'){ 
        remove_post_type_support('page', 'editor');
      }

  }
}

new qmPage();

?>