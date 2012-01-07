<?php defined('_JEXEC') or die;
/**
* @package	Template Framework for Joomla! 1.6+
* @author	Matt Thomas http://construct-framework.com | http://betweenbrain.com
* @copyright	Copyright (C) 2009 - 2012 Matt Thomas. All rights reserved.
* @license	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * JFormFieldGooglewebfont
 *
 * Provides list of Google Web Fonts
 *
 * @static
 * @package		Molajo
 * @subpackage  HTML
 * @since		1.6
 */
class JFormFieldGooglewebfont extends JFormFieldList
{
    /**
     * Field Type
     *
     * @var		string
     * @since	1.6
     */
    public $type = 'Googlewebfont';

    /**
     * getOptions
     *
     * Generates list options
     *
     * @return	array	The field option objects.
     * @since	1.6
     */
    protected function getOptions()
    {
        $options	= array();

        $options[]	= JHtml::_('select.option', '', '- None Selected -');
        $options[]	= JHtml::_('select.option', 'Abel', 'Abel');
        $options[]	= JHtml::_('select.option', 'Abril+Fatface', 'Abril Fatface');
        $options[]	= JHtml::_('select.option', 'Aclonica', 'Aclonica');
        $options[]	= JHtml::_('select.option', 'Actor', 'Actor');
        $options[]	= JHtml::_('select.option', 'Adamina', 'Adamina');
        $options[]	= JHtml::_('select.option', 'Aguafina+Script', 'Aguafina Script');
        $options[]	= JHtml::_('select.option', 'Aladin', 'Aladin');
        $options[]	= JHtml::_('select.option', 'Aldrich', 'Aldrich');
        $options[]	= JHtml::_('select.option', 'Alice', 'Alice');
        $options[]	= JHtml::_('select.option', 'Alike', 'Alike');
        $options[]	= JHtml::_('select.option', 'Alike+Angular', 'Alike Angular');
        $options[]	= JHtml::_('select.option', 'Allan', 'Allan');
        $options[]	= JHtml::_('select.option', 'Allerta', 'Allerta');
        $options[]	= JHtml::_('select.option', 'Allerta+Stencil', 'Allerta Stencil');
        $options[]	= JHtml::_('select.option', 'Amaranth', 'Amaranth');
        $options[]	= JHtml::_('select.option', 'Amatic+SC', 'Amatic SC');
        $options[]	= JHtml::_('select.option', 'Andada', 'Andada');
        $options[]	= JHtml::_('select.option', 'Andika', 'Andika');
        $options[]	= JHtml::_('select.option', 'Annie+Use+Your+Telescope', 'Annie Use Your Telescope');
        $options[]	= JHtml::_('select.option', 'Anonymous+Pro', 'Anonymous Pro');
        $options[]	= JHtml::_('select.option', 'Antic', 'Antic');
        $options[]	= JHtml::_('select.option', 'Anton', 'Anton');
        $options[]	= JHtml::_('select.option', 'Arapey', 'Arapey');
        $options[]	= JHtml::_('select.option', 'Arbutus', 'Arbutus');
        $options[]	= JHtml::_('select.option', 'Architects+Daughter', 'Architects Daughter');
        $options[]	= JHtml::_('select.option', 'Arimo', 'Arimo');
        $options[]	= JHtml::_('select.option', 'Artifika', 'Artifika');
        $options[]	= JHtml::_('select.option', 'Arvo', 'Arvo');
        $options[]	= JHtml::_('select.option', 'Asset', 'Asset');
        $options[]	= JHtml::_('select.option', 'Astloch', 'Astloch');
        $options[]	= JHtml::_('select.option', 'Atomic+Age', 'Atomic Age');
        $options[]	= JHtml::_('select.option', 'Aubrey', 'Aubrey');
        $options[]	= JHtml::_('select.option', 'Bangers', 'Bangers');
        $options[]	= JHtml::_('select.option', 'Baumans', 'Baumans');
        $options[]	= JHtml::_('select.option', 'Bentham', 'Bentham');
        $options[]	= JHtml::_('select.option', 'Bevan', 'Bevan');
        $options[]	= JHtml::_('select.option', 'Bigshot+One', 'Bigshot One');
        $options[]	= JHtml::_('select.option', 'Bilbo', 'Bilbo');
        $options[]	= JHtml::_('select.option', 'Bitter', 'Bitter');
        $options[]	= JHtml::_('select.option', 'Black+Ops+One', 'Black Ops One');
        $options[]	= JHtml::_('select.option', 'Bonbon', 'Bonbon');
        $options[]	= JHtml::_('select.option', 'Bowlby+One', 'Bowlby One');
        $options[]	= JHtml::_('select.option', 'Bowlby+One+SC', 'Bowlby One SC');
        $options[]	= JHtml::_('select.option', 'Brawler', 'Brawler');
        $options[]	= JHtml::_('select.option', 'Bubblegum+Sans', 'Bubblegum Sans');
        $options[]	= JHtml::_('select.option', 'Buda', 'Buda');
        $options[]	= JHtml::_('select.option', 'Butcherman+Caps', 'Butcherman Caps');
        $options[]	= JHtml::_('select.option', 'Cabin', 'Cabin');
        $options[]	= JHtml::_('select.option', 'Cabin+Condensed', 'Cabin Condensed');
        $options[]	= JHtml::_('select.option', 'Cabin+Sketch', 'Cabin Sketch');
        $options[]	= JHtml::_('select.option', 'Cagliostro', 'Cagliostro');
        $options[]	= JHtml::_('select.option', 'Calligraffitti', 'Calligraffitti');
        $options[]	= JHtml::_('select.option', 'Candal', 'Candal');
        $options[]	= JHtml::_('select.option', 'Cantarell', 'Cantarell');
        $options[]	= JHtml::_('select.option', 'Cardo', 'Cardo');
        $options[]	= JHtml::_('select.option', 'Carme', 'Carme');
        $options[]	= JHtml::_('select.option', 'Carter+One', 'Carter One');
        $options[]	= JHtml::_('select.option', 'Caudex', 'Caudex');
        $options[]	= JHtml::_('select.option', 'Cedarville+Cursive', 'Cedarville Cursive');
        $options[]	= JHtml::_('select.option', 'Ceviche+One', 'Ceviche One');
        $options[]	= JHtml::_('select.option', 'Changa+One', 'Changa One');
        $options[]	= JHtml::_('select.option', 'Cherry+Cream+Soda', 'Cherry Cream Soda');
        $options[]	= JHtml::_('select.option', 'Chewy', 'Chewy');
        $options[]	= JHtml::_('select.option', 'Chicle', 'Chicle');
        $options[]	= JHtml::_('select.option', 'Chivo', 'Chivo');
        $options[]	= JHtml::_('select.option', 'Coda', 'Coda');
        $options[]	= JHtml::_('select.option', 'Coda+Caption', 'Coda Caption');
        $options[]	= JHtml::_('select.option', 'Comfortaa', 'Comfortaa');
        $options[]	= JHtml::_('select.option', 'Coming+Soon', 'Coming Soon');
        $options[]	= JHtml::_('select.option', 'Contrail+One', 'Contrail One');
        $options[]	= JHtml::_('select.option', 'Convergence', 'Convergence');
        $options[]	= JHtml::_('select.option', 'Cookie', 'Cookie');
        $options[]	= JHtml::_('select.option', 'Copse', 'Copse');
        $options[]	= JHtml::_('select.option', 'Corben', 'Corben');
        $options[]	= JHtml::_('select.option', 'Cousine', 'Cousine');
        $options[]	= JHtml::_('select.option', 'Coustard', 'Coustard');
        $options[]	= JHtml::_('select.option', 'Covered+By+Your+Grace', 'Covered By Your Grace');
        $options[]	= JHtml::_('select.option', 'Crafty+Girls', 'Crafty Girls');
        $options[]	= JHtml::_('select.option', 'Creepster+Caps', 'Creepster Caps');
        $options[]	= JHtml::_('select.option', 'Crimson+Text', 'Crimson Text');
        $options[]	= JHtml::_('select.option', 'Crushed', 'Crushed');
        $options[]	= JHtml::_('select.option', 'Cuprum', 'Cuprum');
        $options[]	= JHtml::_('select.option', 'Damion', 'Damion');
        $options[]	= JHtml::_('select.option', 'Dancing+Script', 'Dancing Script');
        $options[]	= JHtml::_('select.option', 'Dawning+of+a+New+Day', 'Dawning of a New Day');
        $options[]	= JHtml::_('select.option', 'Days+One', 'Days One');
        $options[]	= JHtml::_('select.option', 'Delius', 'Delius');
        $options[]	= JHtml::_('select.option', 'Delius+Swash+Caps', 'Delius Swash Caps');
        $options[]	= JHtml::_('select.option', 'Delius+Unicase', 'Delius Unicase');
        $options[]	= JHtml::_('select.option', 'Devonshire', 'Devonshire');
        $options[]	= JHtml::_('select.option', 'Didact+Gothic', 'Didact Gothic');
        $options[]	= JHtml::_('select.option', 'Dorsa', 'Dorsa');
        $options[]	= JHtml::_('select.option', 'Dr+Sugiyama', 'Dr Sugiyama');
        $options[]	= JHtml::_('select.option', 'Droid+Sans', 'Droid Sans');
        $options[]	= JHtml::_('select.option', 'Droid+Sans+Mono', 'Droid Sans Mono');
        $options[]	= JHtml::_('select.option', 'Droid+Serif', 'Droid Serif');
        $options[]	= JHtml::_('select.option', 'EB+Garamond', 'EB Garamond');
        $options[]	= JHtml::_('select.option', 'Eater+Caps', 'Eater Caps');
        $options[]	= JHtml::_('select.option', 'Electrolize', 'Electrolize');
        $options[]	= JHtml::_('select.option', 'Engagement', 'Engagement');
        $options[]	= JHtml::_('select.option', 'Expletus+Sans', 'Expletus Sans');
        $options[]	= JHtml::_('select.option', 'Fanwood+Text', 'Fanwood Text');
        $options[]	= JHtml::_('select.option', 'Fascinate', 'Fascinate');
        $options[]	= JHtml::_('select.option', 'Fascinate+Inline', 'Fascinate Inline');
        $options[]	= JHtml::_('select.option', 'Federant', 'Federant');
        $options[]	= JHtml::_('select.option', 'Federo', 'Federo');
        $options[]	= JHtml::_('select.option', 'Fjord+One', 'Fjord One');
        $options[]	= JHtml::_('select.option', 'Fondamento', 'Fondamento');
        $options[]	= JHtml::_('select.option', 'Fontdiner+Swanky', 'Fontdiner Swanky');
        $options[]	= JHtml::_('select.option', 'Forum', 'Forum');
        $options[]	= JHtml::_('select.option', 'Francois+One', 'Francois One');
        $options[]	= JHtml::_('select.option', 'Fresca', 'Fresca');
        $options[]	= JHtml::_('select.option', 'Galdeano', 'Galdeano');
        $options[]	= JHtml::_('select.option', 'Gentium+Basic', 'Gentium Basic');
        $options[]	= JHtml::_('select.option', 'Gentium+Book+Basic', 'Gentium Book Basic');
        $options[]	= JHtml::_('select.option', 'Geo', 'Geo');
        $options[]	= JHtml::_('select.option', 'Geostar', 'Geostar');
        $options[]	= JHtml::_('select.option', 'Geostar+Fill', 'Geostar Fill');
        $options[]	= JHtml::_('select.option', 'Give+You+Glory', 'Give You Glory');
        $options[]	= JHtml::_('select.option', 'Gloria+Hallelujah', 'Gloria Hallelujah');
        $options[]	= JHtml::_('select.option', 'Goblin+One', 'Goblin One');
        $options[]	= JHtml::_('select.option', 'Gochi+Hand', 'Gochi Hand');
        $options[]	= JHtml::_('select.option', 'Goudy+Bookletter+1911', 'Goudy Bookletter 1911');
        $options[]	= JHtml::_('select.option', 'Gravitas+One', 'Gravitas One');
        $options[]	= JHtml::_('select.option', 'Gruppo', 'Gruppo');
        $options[]	= JHtml::_('select.option', 'Hammersmith+One', 'Hammersmith One');
        $options[]	= JHtml::_('select.option', 'Herr+Von+Muellerhoff', 'Herr Von Muellerhoff');
        $options[]	= JHtml::_('select.option', 'Holtwood+One+SC', 'Holtwood One SC');
        $options[]	= JHtml::_('select.option', 'Homemade+Apple', 'Homemade Apple');
        $options[]	= JHtml::_('select.option', 'IM+Fell+DW+Pica', 'IM Fell DW Pica');
        $options[]	= JHtml::_('select.option', 'IM+Fell+DW+Pica+SC', 'IM Fell DW Pica SC');
        $options[]	= JHtml::_('select.option', 'IM+Fell+Double+Pica', 'IM Fell Double Pica');
        $options[]	= JHtml::_('select.option', 'IM+Fell+Double+Pica+SC', 'IM Fell Double Pica SC');
        $options[]	= JHtml::_('select.option', 'IM+Fell+English', 'IM Fell English');
        $options[]	= JHtml::_('select.option', 'IM+Fell+English+SC', 'IM Fell English SC');
        $options[]	= JHtml::_('select.option', 'IM+Fell+French+Canon', 'IM Fell French Canon');
        $options[]	= JHtml::_('select.option', 'IM+Fell+French+Canon+SC', 'IM Fell French Canon SC');
        $options[]	= JHtml::_('select.option', 'IM+Fell+Great+Primer', 'IM Fell Great Primer');
        $options[]	= JHtml::_('select.option', 'IM+Fell+Great+Primer+SC', 'IM Fell Great Primer SC');
        $options[]	= JHtml::_('select.option', 'Iceland', 'Iceland');
        $options[]	= JHtml::_('select.option', 'Inconsolata', 'Inconsolata');
        $options[]	= JHtml::_('select.option', 'Indie+Flower', 'Indie Flower');
        $options[]	= JHtml::_('select.option', 'Irish+Grover', 'Irish Grover');
        $options[]	= JHtml::_('select.option', 'Istok+Web', 'Istok Web');
        $options[]	= JHtml::_('select.option', 'Jockey+One', 'Jockey One');
        $options[]	= JHtml::_('select.option', 'Josefin+Sans', 'Josefin Sans');
        $options[]	= JHtml::_('select.option', 'Josefin+Slab', 'Josefin Slab');
        $options[]	= JHtml::_('select.option', 'Judson', 'Judson');
        $options[]	= JHtml::_('select.option', 'Julee', 'Julee');
        $options[]	= JHtml::_('select.option', 'Jura', 'Jura');
        $options[]	= JHtml::_('select.option', 'Just+Another+Hand', 'Just Another Hand');
        $options[]	= JHtml::_('select.option', 'Just+Me+Again+Down+Here', 'Just Me Again Down Here');
        $options[]	= JHtml::_('select.option', 'Kameron', 'Kameron');
        $options[]	= JHtml::_('select.option', 'Kelly+Slab', 'Kelly Slab');
        $options[]	= JHtml::_('select.option', 'Kenia', 'Kenia');
        $options[]	= JHtml::_('select.option', 'Knewave', 'Knewave');
        $options[]	= JHtml::_('select.option', 'Kranky', 'Kranky');
        $options[]	= JHtml::_('select.option', 'Kreon', 'Kreon');
        $options[]	= JHtml::_('select.option', 'Kristi', 'Kristi');
        $options[]	= JHtml::_('select.option', 'La+Belle+Aurore', 'La Belle Aurore');
        $options[]	= JHtml::_('select.option', 'Lancelot', 'Lancelot');
        $options[]	= JHtml::_('select.option', 'Lato', 'Lato');
        $options[]	= JHtml::_('select.option', 'League+Script', 'League Script');
        $options[]	= JHtml::_('select.option', 'Leckerli+One', 'Leckerli One');
        $options[]	= JHtml::_('select.option', 'Lekton', 'Lekton');
        $options[]	= JHtml::_('select.option', 'Lemon', 'Lemon');
        $options[]	= JHtml::_('select.option', 'Limelight', 'Limelight');
        $options[]	= JHtml::_('select.option', 'Linden+Hill', 'Linden Hill');
        $options[]	= JHtml::_('select.option', 'Lobster', 'Lobster');
        $options[]	= JHtml::_('select.option', 'Lobster+Two', 'Lobster Two');
        $options[]	= JHtml::_('select.option', 'Lora', 'Lora');
        $options[]	= JHtml::_('select.option', 'Love+Ya+Like+A+Sister', 'Love Ya Like A Sister');
        $options[]	= JHtml::_('select.option', 'Loved+by+the+King', 'Loved by the King');
        $options[]	= JHtml::_('select.option', 'Luckiest+Guy', 'Luckiest Guy');
        $options[]	= JHtml::_('select.option', 'Maiden+Orange', 'Maiden Orange');
        $options[]	= JHtml::_('select.option', 'Mako', 'Mako');
        $options[]	= JHtml::_('select.option', 'Marck+Script', 'Marck Script');
        $options[]	= JHtml::_('select.option', 'Marmelad', 'Marmelad');
        $options[]	= JHtml::_('select.option', 'Marvel', 'Marvel');
        $options[]	= JHtml::_('select.option', 'Mate', 'Mate');
        $options[]	= JHtml::_('select.option', 'Mate+SC', 'Mate SC');
        $options[]	= JHtml::_('select.option', 'Maven+Pro', 'Maven Pro');
        $options[]	= JHtml::_('select.option', 'Meddon', 'Meddon');
        $options[]	= JHtml::_('select.option', 'MedievalSharp', 'MedievalSharp');
        $options[]	= JHtml::_('select.option', 'Megrim', 'Megrim');
        $options[]	= JHtml::_('select.option', 'Merienda+One', 'Merienda One');
        $options[]	= JHtml::_('select.option', 'Merriweather', 'Merriweather');
        $options[]	= JHtml::_('select.option', 'Metrophobic', 'Metrophobic');
        $options[]	= JHtml::_('select.option', 'Michroma', 'Michroma');
        $options[]	= JHtml::_('select.option', 'Miltonian', 'Miltonian');
        $options[]	= JHtml::_('select.option', 'Miltonian+Tattoo', 'Miltonian Tattoo');
        $options[]	= JHtml::_('select.option', 'Miss+Fajardose', 'Miss Fajardose');
        $options[]	= JHtml::_('select.option', 'Miss+Saint+Delafield', 'Miss Saint Delafield');
        $options[]	= JHtml::_('select.option', 'Modern+Antiqua', 'Modern Antiqua');
        $options[]	= JHtml::_('select.option', 'Molengo', 'Molengo');
        $options[]	= JHtml::_('select.option', 'Monofett', 'Monofett');
        $options[]	= JHtml::_('select.option', 'Monoton', 'Monoton');
        $options[]	= JHtml::_('select.option', 'Monsieur+La+Doulaise', 'Monsieur La Doulaise');
        $options[]	= JHtml::_('select.option', 'Montez', 'Montez');
        $options[]	= JHtml::_('select.option', 'Mountains+of+Christmas', 'Mountains of Christmas');
        $options[]	= JHtml::_('select.option', 'Mr+Bedford', 'Mr Bedford');
        $options[]	= JHtml::_('select.option', 'Mr+Dafoe', 'Mr Dafoe');
        $options[]	= JHtml::_('select.option', 'Mr+De+Haviland', 'Mr De Haviland');
        $options[]	= JHtml::_('select.option', 'Mrs+Sheppards', 'Mrs Sheppards');
        $options[]	= JHtml::_('select.option', 'Muli', 'Muli');
        $options[]	= JHtml::_('select.option', 'Neucha', 'Neucha');
        $options[]	= JHtml::_('select.option', 'Neuton', 'Neuton');
        $options[]	= JHtml::_('select.option', 'News+Cycle', 'News Cycle');
        $options[]	= JHtml::_('select.option', 'Niconne', 'Niconne');
        $options[]	= JHtml::_('select.option', 'Nixie+One', 'Nixie One');
        $options[]	= JHtml::_('select.option', 'Nobile', 'Nobile');
        $options[]	= JHtml::_('select.option', 'Nosifer+Caps', 'Nosifer Caps');
        $options[]	= JHtml::_('select.option', 'Nothing+You+Could+Do', 'Nothing You Could Do');
        $options[]	= JHtml::_('select.option', 'Nova+Cut', 'Nova Cut');
        $options[]	= JHtml::_('select.option', 'Nova+Flat', 'Nova Flat');
        $options[]	= JHtml::_('select.option', 'Nova+Mono', 'Nova Mono');
        $options[]	= JHtml::_('select.option', 'Nova+Oval', 'Nova Oval');
        $options[]	= JHtml::_('select.option', 'Nova+Round', 'Nova Round');
        $options[]	= JHtml::_('select.option', 'Nova+Script', 'Nova Script');
        $options[]	= JHtml::_('select.option', 'Nova+Slim', 'Nova Slim');
        $options[]	= JHtml::_('select.option', 'Nova+Square', 'Nova Square');
        $options[]	= JHtml::_('select.option', 'Numans', 'Numans');
        $options[]	= JHtml::_('select.option', 'Nunito', 'Nunito');
        $options[]	= JHtml::_('select.option', 'Old+Standard+TT', 'Old Standard TT');
        $options[]	= JHtml::_('select.option', 'Open+Sans', 'Open Sans');
        $options[]	= JHtml::_('select.option', 'Open+Sans+Condensed', 'Open Sans Condensed');
        $options[]	= JHtml::_('select.option', 'Orbitron', 'Orbitron');
        $options[]	= JHtml::_('select.option', 'Original+Surfer', 'Original Surfer');
        $options[]	= JHtml::_('select.option', 'Oswald', 'Oswald');
        $options[]	= JHtml::_('select.option', 'Over+the+Rainbow', 'Over the Rainbow');
        $options[]	= JHtml::_('select.option', 'Ovo', 'Ovo');
        $options[]	= JHtml::_('select.option', 'PT+Sans', 'PT Sans');
        $options[]	= JHtml::_('select.option', 'PT+Sans+Caption', 'PT Sans Caption');
        $options[]	= JHtml::_('select.option', 'PT+Sans+Narrow', 'PT Sans Narrow');
        $options[]	= JHtml::_('select.option', 'PT+Serif', 'PT Serif');
        $options[]	= JHtml::_('select.option', 'PT+Serif+Caption', 'PT Serif Caption');
        $options[]	= JHtml::_('select.option', 'Pacifico', 'Pacifico');
        $options[]	= JHtml::_('select.option', 'Passero+One', 'Passero One');
        $options[]	= JHtml::_('select.option', 'Patrick+Hand', 'Patrick Hand');
        $options[]	= JHtml::_('select.option', 'Paytone+One', 'Paytone One');
        $options[]	= JHtml::_('select.option', 'Permanent+Marker', 'Permanent Marker');
        $options[]	= JHtml::_('select.option', 'Petrona', 'Petrona');
        $options[]	= JHtml::_('select.option', 'Philosopher', 'Philosopher');
        $options[]	= JHtml::_('select.option', 'Piedra', 'Piedra');
        $options[]	= JHtml::_('select.option', 'Pinyon+Script', 'Pinyon Script');
        $options[]	= JHtml::_('select.option', 'Play', 'Play');
        $options[]	= JHtml::_('select.option', 'Playfair+Display', 'Playfair Display');
        $options[]	= JHtml::_('select.option', 'Podkova', 'Podkova');
        $options[]	= JHtml::_('select.option', 'Poller+One', 'Poller One');
        $options[]	= JHtml::_('select.option', 'Poly', 'Poly');
        $options[]	= JHtml::_('select.option', 'Pompiere', 'Pompiere');
        $options[]	= JHtml::_('select.option', 'Prata', 'Prata');
        $options[]	= JHtml::_('select.option', 'Prociono', 'Prociono');
        $options[]	= JHtml::_('select.option', 'Puritan', 'Puritan');
        $options[]	= JHtml::_('select.option', 'Quattrocento', 'Quattrocento');
        $options[]	= JHtml::_('select.option', 'Quattrocento+Sans', 'Quattrocento Sans');
        $options[]	= JHtml::_('select.option', 'Questrial', 'Questrial');
        $options[]	= JHtml::_('select.option', 'Quicksand', 'Quicksand');
        $options[]	= JHtml::_('select.option', 'Radley', 'Radley');
        $options[]	= JHtml::_('select.option', 'Raleway', 'Raleway');
        $options[]	= JHtml::_('select.option', 'Rammetto+One', 'Rammetto One');
        $options[]	= JHtml::_('select.option', 'Rancho', 'Rancho');
        $options[]	= JHtml::_('select.option', 'Rationale', 'Rationale');
        $options[]	= JHtml::_('select.option', 'Redressed', 'Redressed');
        $options[]	= JHtml::_('select.option', 'Reenie+Beanie', 'Reenie Beanie');
        $options[]	= JHtml::_('select.option', 'Ribeye', 'Ribeye');
        $options[]	= JHtml::_('select.option', 'Ribeye+Marrow', 'Ribeye Marrow');
        $options[]	= JHtml::_('select.option', 'Righteous', 'Righteous');
        $options[]	= JHtml::_('select.option', 'Rochester', 'Rochester');
        $options[]	= JHtml::_('select.option', 'Rock+Salt', 'Rock Salt');
        $options[]	= JHtml::_('select.option', 'Rokkitt', 'Rokkitt');
        $options[]	= JHtml::_('select.option', 'Rosario', 'Rosario');
        $options[]	= JHtml::_('select.option', 'Ruslan+Display', 'Ruslan Display');
        $options[]	= JHtml::_('select.option', 'Salsa', 'Salsa');
        $options[]	= JHtml::_('select.option', 'Sancreek', 'Sancreek');
        $options[]	= JHtml::_('select.option', 'Sansita+One', 'Sansita One');
        $options[]	= JHtml::_('select.option', 'Satisfy', 'Satisfy');
        $options[]	= JHtml::_('select.option', 'Schoolbell', 'Schoolbell');
        $options[]	= JHtml::_('select.option', 'Shadows+Into+Light', 'Shadows Into Light');
        $options[]	= JHtml::_('select.option', 'Shanti', 'Shanti');
        $options[]	= JHtml::_('select.option', 'Short+Stack', 'Short Stack');
        $options[]	= JHtml::_('select.option', 'Sigmar+One', 'Sigmar One');
        $options[]	= JHtml::_('select.option', 'Signika', 'Signika');
        $options[]	= JHtml::_('select.option', 'Signika+Negative', 'Signika Negative');
        $options[]	= JHtml::_('select.option', 'Six+Caps', 'Six Caps');
        $options[]	= JHtml::_('select.option', 'Slackey', 'Slackey');
        $options[]	= JHtml::_('select.option', 'Smokum', 'Smokum');
        $options[]	= JHtml::_('select.option', 'Smythe', 'Smythe');
        $options[]	= JHtml::_('select.option', 'Sniglet', 'Sniglet');
        $options[]	= JHtml::_('select.option', 'Snippet', 'Snippet');
        $options[]	= JHtml::_('select.option', 'Sorts+Mill+Goudy', 'Sorts Mill Goudy');
        $options[]	= JHtml::_('select.option', 'Special+Elite', 'Special Elite');
        $options[]	= JHtml::_('select.option', 'Spinnaker', 'Spinnaker');
        $options[]	= JHtml::_('select.option', 'Spirax', 'Spirax');
        $options[]	= JHtml::_('select.option', 'Stardos+Stencil', 'Stardos Stencil');
        $options[]	= JHtml::_('select.option', 'Stint+Ultra+Condensed', 'Stint Ultra Condensed');
        $options[]	= JHtml::_('select.option', 'Sue+Ellen+Francisco', 'Sue Ellen Francisco');
        $options[]	= JHtml::_('select.option', 'Sunshiney', 'Sunshiney');
        $options[]	= JHtml::_('select.option', 'Supermercado+One', 'Supermercado One');
        $options[]	= JHtml::_('select.option', 'Swanky+and+Moo+Moo', 'Swanky and Moo Moo');
        $options[]	= JHtml::_('select.option', 'Syncopate', 'Syncopate');
        $options[]	= JHtml::_('select.option', 'Tangerine', 'Tangerine');
        $options[]	= JHtml::_('select.option', 'Tenor+Sans', 'Tenor Sans');
        $options[]	= JHtml::_('select.option', 'Terminal+Dosis', 'Terminal Dosis');
        $options[]	= JHtml::_('select.option', 'The+Girl+Next+Door', 'The Girl Next Door');
        $options[]	= JHtml::_('select.option', 'Tienne', 'Tienne');
        $options[]	= JHtml::_('select.option', 'Tinos', 'Tinos');
        $options[]	= JHtml::_('select.option', 'Tulpen+One', 'Tulpen One');
        $options[]	= JHtml::_('select.option', 'Ubuntu', 'Ubuntu');
        $options[]	= JHtml::_('select.option', 'Ubuntu+Condensed', 'Ubuntu Condensed');
        $options[]	= JHtml::_('select.option', 'Ubuntu+Mono', 'Ubuntu Mono');
        $options[]	= JHtml::_('select.option', 'Ultra', 'Ultra');
        $options[]	= JHtml::_('select.option', 'UnifrakturCook', 'UnifrakturCook');
        $options[]	= JHtml::_('select.option', 'UnifrakturMaguntia', 'UnifrakturMaguntia');
        $options[]	= JHtml::_('select.option', 'Unkempt', 'Unkempt');
        $options[]	= JHtml::_('select.option', 'Unlock', 'Unlock');
        $options[]	= JHtml::_('select.option', 'Unna', 'Unna');
        $options[]	= JHtml::_('select.option', 'VT323', 'VT323');
        $options[]	= JHtml::_('select.option', 'Varela', 'Varela');
        $options[]	= JHtml::_('select.option', 'Varela+Round', 'Varela Round');
        $options[]	= JHtml::_('select.option', 'Vast+Shadow', 'Vast Shadow');
        $options[]	= JHtml::_('select.option', 'Vibur', 'Vibur');
        $options[]	= JHtml::_('select.option', 'Vidaloka', 'Vidaloka');
        $options[]	= JHtml::_('select.option', 'Viga', 'Viga');
        $options[]	= JHtml::_('select.option', 'Volkhov', 'Volkhov');
        $options[]	= JHtml::_('select.option', 'Vollkorn', 'Vollkorn');
        $options[]	= JHtml::_('select.option', 'Voltaire', 'Voltaire');
        $options[]	= JHtml::_('select.option', 'Waiting+for+the+Sunrise', 'Waiting for the Sunrise');
        $options[]	= JHtml::_('select.option', 'Wallpoet', 'Wallpoet');
        $options[]	= JHtml::_('select.option', 'Walter+Turncoat', 'Walter Turncoat');
        $options[]	= JHtml::_('select.option', 'Wire+One', 'Wire One');
        $options[]	= JHtml::_('select.option', 'Yanone+Kaffeesatz', 'Yanone Kaffeesatz');
        $options[]	= JHtml::_('select.option', 'Yellowtail', 'Yellowtail');
        $options[]	= JHtml::_('select.option', 'Yeseva+One', 'Yeseva One');
        $options[]	= JHtml::_('select.option', 'Zeyada', 'Zeyada');    

        return $options;

    }
}
