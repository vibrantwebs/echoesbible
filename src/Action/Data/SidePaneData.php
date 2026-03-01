<?php declare(strict_types=1);

namespace App\Action\Data;

use App\Service\AccountService;
use App\Action\AbstractAction;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SidePaneData extends AbstractAction {

    public function __construct(private readonly AccountService $twig)
    {}

    public function run(Request $request): Response
    {
        $echoId = $request->request->getInt('echoId');

        $html = $this->getEchoData($echoId);

        return new JsonResponse([
            'message' => 'You logged out!',
            'echoId' => $echoId,
            'html' => $html
        ]);
    }

    /**
     * todo:
     * We can replace this with a database call to get the echo data.
     * We should probably have as little HTML returned as possible - frontend should own that.
     */
    private function getEchoData(int $echoId) {
        switch ($echoId) {
            case 1:
                return <<<HTML
                    <b>Translations</b>
                    <br>
                    <b>Hebrew:</b> וַיְדַבֵּר יְהוָה אֶל־מֹשֶׁה<br>
                    Vayedabber YHWH el-Mosheh<br>
                    “YHWH spoke to Moses”
                    <br>
                    <br>
                    <b>LXX:</b> καὶ ἐλάλησεν Κύριος πρὸς Μωυσῆν<br>
                    Kai elalēsen Kyrios pros Mōysēn
                    <br>
                    <br>
                    <b>Greek:</b> Παῦλος, κλητὸς ἀπόστολος Χριστοῦ Ἰησοῦ<br>
                    Paulos, klētos apostolos Christou Iēsou<br>
                    “Paul, called [to be] an apostle of Christ Jesus”
                    <hr>
                    <b>Commentary</b>
                    <div style="color: gray">
                        <p>
                            <i>
                                The book of Numbers begins with something simple but profound: G-d speaks. The authority, the direction,
                                and the purpose all start with Him. Moses isn’t stepping forward on his own initiative; he’s responding.
                                The census that follows isn’t just an administrative task—it flows out of that prior moment of divine
                                calling. It has weight because it begins with G-d’s voice.
                            </i>
                        </p>
                        <p>
                            <i>
                                Paul’s story carries a similar pattern. His authority wasn’t self-created or self-promoted. He understood
                                himself to be responding to a calling that interrupted his life and reshaped it. Just as Moses was
                                redirected from a violent chapter of his past into a life of leadership and service, Paul was drawn out of
                                his own wilderness and entrusted with the care of a people gathered by G-d’s will.
                            </i>
                        </p>
                        <p>
                            <i>
                                In both cases, these men weren’t simply given new assignments. They were pulled off paths they thought they
                                understood and invited into callings they hadn’t planned and likely never would have chosen for themselves.
                            </i>
                        </p>
                    </div>
HTML;

            case 2:
                return <<<HTML
                    <b>Translations</b>
                    <br>
                    <b>Hebrew:</b> אַתָּה וְאַהֲרֹן<br>
                    Attah ve-Aharon<br>
                    “You and Aaron”
                    <br>
                    <br>
                    <b>LXX:</b> σὺ καὶ Ἀαρών
                    Sy kai Aarōn
                    <br>
                    <br>
                    <b>Greek:</b> καὶ Σωσθένης ὁ ἀδελφός
                    Kai Sōsthenēs ho adelphos<br>
                    “and Sosthenes, the brother”
                    <hr>
                    <b>Commentary</b>
                    <div style="color: gray">
                        <p>
                            <i>
                                Aaron is regularly presented alongside Moses as a true partner in leading Israel—especially in priestly and
                                spiritual matters. His role isn’t symbolic or secondary. It reflects shared responsibility and a clear
                                continuity with G-d’s instruction. Aaron doesn’t simply stand next to Moses; he represents an authorized
                                and visible extension of the leadership G-d established.
                            </i>
                        </p>
                        <p>
                            <i>
                                Sosthenes appears in a similar way alongside Paul. He is named with Paul in the opening of First
                                Corinthians and is identified as a leader of the synagogue in Corinth. His presence adds weight to Paul’s
                                message. By standing with Paul, Sosthenes serves as a trusted witness from within the Jewish community,
                                helping connect the synagogue and the growing Corinthian church. His support reinforces the credibility of
                                Paul’s teaching.
                            </i>
                        </p>
                        <p>
                            <i>
                                In both cases, Aaron and Sosthenes are more than assistants. Each has his own calling and recognized
                                authority—authority that comes from G-d rather than from self-assertion. While their leadership is closely
                                connected to Moses and Paul, it is not erased by that association. Instead, their public partnership
                                strengthens and confirms the leadership of those they stand beside, offering shared witness rather than
                                mere support.
                            </i>
                        </p>
                    </div>
HTML;

            case 3:
                return <<<HTML
                    <b>Translations</b>
                    <br>
                    <b>Hebrew:</b> תִּפְקְדוּ אֹתָם לְצִבְאֹתָם<br>
                    Tifqedu otam le-tsiv’otam<br>
                    “You shall count them by their divisions/hosts”
                    <br>
                    <br>
                    <b>LXX:</b> ἐπισκέψασθε αὐτοὺς κατὰ τὰς δυνάμεις αὐτῶν<br>
                    Episkesasthe autous kata tas dynameis autōn
                    <br>
                    <br>
                    <b>Greek:</b> τῇ ἐκκλησίᾳ τοῦ Θεοῦ τῇ οὔσῃ ἐν Κορίνθῳ<br>
                    Tē ekklēsia tou Theou tē ousē en Korinthō<br>
                    “To the assembly of God which is in Corinth”
                    <hr>
                    <b>Commentary</b>
                    <div style="color: gray">
                        <p>
                            <i>In Numbers, the census isn’t just administrative bookkeeping — it’s actually something much deeper. It’s about spiritual order and
                                purpose. In Parshat Bamidbar, the Hebrew word used for “counting” comes from the root <b>pāqad (פקד)</b>,
                                which doesn’t simply mean to tally numbers. It also carries the idea of appointing or entrusting someone with responsibility.
                                So when the people are counted, it’s not just about statistics — it’s about calling. To be counted is to be entrusted. The census
                                marks out those who are placed under covenant responsibility and God’s care.
                            </i>
                        </p>
                        <p>
                            <i>In a similar way, the church in Corinth isn’t described as just a voluntary club or social group. It’s portrayed as a divinely formed
                                assembly, continuing the pattern of Israel’s ordered community. The Greek word <b>ekklēsia (ἐκκλησία)</b> — often translated “church”
                                — is the same word the Septuagint uses for the Hebrew <b>qāhāl (קָהָל)</b>, meaning the covenant assembly of Israel. That Hebrew term
                                also connects conceptually with ideas like gathering, counting, and even lifting up. In Bamidbar, the phrase “lift up the heads”
                                appears repeatedly when the people are counted, linking enumeration with affirmation and elevation. It’s a pastoral image: the people
                                aren’t just assembled; they’re recognized and honored as those called into covenant purpose.
                            </i>
                        </p>
                        <p>
                            <i>Across both the Torah and its New Testament echo, the emphasis is the same: God forms a people who are both counted and entrusted. This
                                gathering isn’t random or passive. It’s intentional and purposeful — but also encouraging. Those who are gathered are lifted up
                                precisely because they are known, ordered, and commissioned within God’s covenant design.
                            </i>
                        </p>
                    </div>
HTML;

            case 4:
                return <<<HTML
                    <b>Translations</b>
                    <br>
                    <b>Hebrew:</b> אֵלֶּה קְרוּאֵי הָעֵדָה<br>
                    Elleh qerū’ei ha-‘edah<br>
                    “These are the ones called of the congregation”
                    <br>
                    <br>
                    <b>LXX:</b> οὗτοί εἰσιν οἱ κλητοὶ τῆς συναγωγῆς<br>
                    Houtoi eisin hoi klētoi tēs synagōgēs
                    <br>
                    <br>
                    <b>Greek:</b> κλητοῖς ἁγίοις … σὺν πᾶσιν τοῖς ἐπικαλουμένοις τὸ ὄνομα<br>
                    Klētois hagiois … syn pasin tois epikaloumenois to onoma<br>
                    “Called saints … with all who call upon the name”
                    <hr>
                    <b>Commentary</b>
                    <div style="color: gray">
                        <p>
                            <i>
                                Numbers 1:16 and 1 Corinthians 1:2 are beautifully connected by the shared root<b> קרא (qārāʾ)</b> in Hebrew and
                                <b>καλέω (kaleō)</b> in Greek. In both passages, “calling” is more than simply being summoned. It’s about being
                                named, known, and given a place within God’s covenant family.
                            </i>
                        </p>
                        <p>
                            <i>
                                In Numbers 1:16 — “These are those who were called of the congregation” — the setting is a wilderness
                                census. On the surface, it looks administrative. But it is much more than that. The men who are “called”
                                are not random choices; they are recognized from within the community to represent it. The calling brings
                                order and clarity. From the larger body, certain individuals are set apart to help guide and serve. God’s
                                design for the community takes shape through these appointed leaders. Calling, here, gives structure and
                                purpose to the covenant people.
                            </i>
                        </p>
                        <p>
                            <i>
                                In 1 Corinthians 1:2, Paul speaks to believers as “called saints,” and then adds, “with all who call upon
                                the Name.” The same root idea appears, but it unfolds even more fully. The believers’ identity — holy, set
                                apart — begins with God’s initiative. They are called into that identity; they do not create it for
                                themselves. Yet Paul also describes them as people who actively “call upon” the Name. God calls them, and
                                they respond by calling on Him.
                            </i>
                        </p>
                        <p>
                            <i>
                                That mutual movement is significant. In the wilderness, God calls leaders out from among the tribes to
                                shape an ordered community. In Corinth, God calls a sanctified assembly into being in Messiah. In both
                                cases, identity comes first. God establishes who His people are before speaking about what they are to do.
                            </i>
                        </p>
                        <p>
                            <i>
                                At the same time, covenant life is never passive. In the Hebrew Scriptures, “calling upon the Name”
                                expresses worship, loyalty, and trust (see Genesis 4:26 and Joel 2:32). Paul’s language places the
                                Corinthian believers within that same story. They are not only summoned; they are responsive.
                            </i>
                        </p>
                        <p>
                            <i>
                                So in both texts,<b> קרא / καλέω </b>becomes a kind of covenant heartbeat. To be called is to belong. To belong is
                                to carry responsibility. And those who belong are known by the fact that they call upon the One who first
                                called them.
                            </i>
                        </p>
                    </div>
HTML;

            default:
                return "No Echo Data";
        }
    }
}
