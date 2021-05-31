<!-- - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarati degli attributi
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà --> 


<?php 
class Movie{
    /* ATTRIBUTI */
    public $title;
    public $regista;
    public $protagonista;
    public $genere;
    public $trama;
    /* COSTRUTTORI */
    function __construct($title, $regista, $protagonista, $genere, $trama){
        $this->title = $title;
        $this->regista = $regista;
        $this->protagonista = $protagonista;
        $this->genere = $genere;
        $this->trama = $trama;
    }
    /* METODO */
    public function estrazione(){
        $estr = substr($this->trama, 0, 400);
        return $estr;
    }
}

/* INSTANZA 1 */
$ilGladiatore = new Movie("Il Gladiatore", "Ridley Scott", "Massimo Decimo Meridio", "Epico, storico", "Nell'anno 180 d.C. il generale Massimo Decimo Meridio[1] guida l'esercito romano alla vittoria durante la guerra contro i Marcomanni in Germania, guadagnandosi la stima dell'anziano imperatore romano Marco Aurelio, il quale, malato e sentendosi prossimo alla fine non accetta il figlio Commodo come proprio successore, considerandolo inadatto al ruolo, e designa il generale Massimo, vedendovi il figlio che avrebbe voluto avere al posto di Commodo: Marco Aurelio intende affidargli il compito di ripristinare la repubblica restituendo il potere al senato, ovvero al popolo romano, come avveniva prima dell'avvento dell'età imperiale.

Inizialmente riluttante, Massimo chiede tempo per decidere e si ritira in tenda a pregare gli dèi affinché lo aiutino a decidere e proteggano la sua famiglia, idealmente rappresentata da due statuette della moglie e del figlio che Massimo porta con sé. Nel frattempo Marco Aurelio comunica la propria decisione al figlio, che era giunto da Roma insieme alla sorella Lucilla che, vedova con un figlio, è innamorata di Massimo; Commodo, deluso e afflitto per la scelta del padre, lo uccide soffocandolo con il proprio petto prima che il genitore renda pubblica la propria decisione. Massimo capisce che l'imperatore non è morto per cause naturali ma è stato ucciso dal figlio; rifiuta, dunque, di sottomettersi a Commodo, che dà allora ordine al generale Quinto, capo della Guardia Pretoria e amico di Massimo, di farlo decapitare e di crocifiggere la sua famiglia.

Mentre Commodo viene incoronato imperatore di Roma, Massimo viene immobilizzato e condotto in mezzo alla foresta per essere giustiziato; inginocchiatosi davanti al boia riesce, dopo aver finto di accettare il suo destino, ad afferrarne la spada e a uccidere, uno dopo l'altro, tutti i pretoriani del manipolo. Gravemente ferito a un braccio nel corso dell'azione, s'impossessa di due cavalli e intraprende il lungo viaggio verso casa, ma giunge troppo tardi: Massimo vede alcuni suoi amici morti, e poi scopre la moglie e il figlio crocifissi tra le rovine fumanti della propria abitazione. Disperato, piange i suoi cari defunti; infine, si accascia straziato dal dolore e sfinito dalla stanchezza. ");

/* INSTANZA 2 */
$ilCavaliereOscuro = new Movie("IL CAVALIERE OSCURO", "Christopher Nolan", "Batman", "azione, poliziesco, thriller, drammatico, avventura", "È passato poco più di un anno da quando Batman ha fatto la sua comparsa e Gotham City è diventata un posto migliore, con la malavita terrorizzata, ma anche con alcuni vigilanti improvvisati che cercano in tutti i modi di imitare l'Uomo Pipistrello, il quale disapprova un simile operato e fa capire di non poter condividere la sua missione con nessuno. Sia il tenente James Gordon che il nuovo procuratore distrettuale Harvey Dent, fidanzato con l'assistente Rachel Dawes, nonché vecchia amica di infanzia di Bruce Wayne, cercano senza successo di incastrare il boss mafioso Sal Maroni. Wayne appoggia Dent sia come uomo pubblico che come Batman, collaborando con lui e Gordon per portare di fronte alla giustizia il crimine organizzato.

Dopo aver rapinato una banca che ricicla il denaro della mafia, il folle Joker, un criminale psicopatico che si trucca da clown e di cui nessuno conosce l'identità, compare ad una riunione dei capi della malavita di Gotham proponendo la morte di Batman come unica soluzione per tornare alla normalità. Wayne entra in azione per catturare il loro contabile Lau Chen, che si trova in un raid a Hong Kong: siccome i cinesi non concederebbero l’estradizione per un connazionale, Bruce indossa la nuova tuta creata dal dirigente della Wayne Enterprises, Lucius Fox, e vola a Hong Kong per coglierlo di sorpresa. Mentre Lau viene interrogato, Dent trova un appiglio legale per incastrare centinaia di criminali. Joker quindi, con l'approvazione dei capi mafiosi, mette in atto il suo piano: chiede pubblicamente che Batman riveli la sua identità e si faccia arrestare, pena la morte di almeno una vittima per ogni giorno che passa. Dopo aver impiccato uno dei vigilanti improvvisati, Joker fa saltare in aria l'auto con all’interno il giudice del processo a Maroni e avvelena mortalmente il commissario Loeb; la vittima successiva dovrebbe essere proprio Harvey Dent, che viene però salvato da Wayne nel proprio attico durante una festa di beneficenza. ");

?>