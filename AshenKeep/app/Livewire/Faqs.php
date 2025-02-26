<?php
 
namespace App\Livewire;
 
use Livewire\Component;
 
class FAQs extends Component
{
    public $openIndex = null; // Track the opened question
 
    public function toggle($index)
    {
        $this->openIndex = ($this->openIndex === $index) ? null : $index; // Toggle between open and close
    }
 
    public function render()
    {
        $faqs = [
            ["question" => "What is AshenKeep?", "answer" => "AshenKeep is a vault application management system where the process of securing a vault in the Risen Christ Memorial Garden. From filling up an application form, submitting requirements, giving donations, and issuing of vaults."],
            ["question" => "What does 'Privilege to Use' mean?", "answer" => "The 'Privilege to Use' grants the applicant the right to use the vault for a period of 50 years from the issuance of the certificate. It does not confer ownership, and the privilege cannot be sold or transferred to another person."],
            ["question" => "Where is the columbarium located?", "answer" => "The Risen Christ Memorial Garden (RCMG) is located within St. Alphonsus Mary de Liguori Parish Church at Humabon Place, Lapu Lapu St, Magallanes Village, Makati City, 1232. It serves as a sacred resting place for the cremated remains of the faithful and is under the management of the Roman Catholic Archbishop of Manila (RCAM)."],
            ["question" => "Who can apply for a columbarium vault?", "answer" => "The RCMG columbarium is available exclusively for Catholics, with priority given to parishioners of St. Alphonsus Mary de Liguori Parish. Those who wish to secure a vault must meet the qualifications set by the RCAM and comply with the columbarium's rules and regulations."],
            ["question" => "How do I apply for a columbarium vault?", "answer" => "To apply for a vault, you must fill out an application form, which may be available on this website. Once the form is completed, follow the steps outlined in the application process."],
            ["question" => "What documents are required for the application?", "answer" => "The required documents for the application include a marriage certificate, baptismal certificate, or birth certificate. Any of these documents can be submitted to verify eligibility for a columbarium vault."],
            ["question" => "Can I apply on behalf of someone else?", "answer" => "Yes, you may apply on behalf of someone else. However, you must ensure that all the provided information is accurate and complete."],
            ["question" => "Are installment plans available for purchasing a vault?", "answer" => "Yes, installment plans are available for purchasing a vault. Payments can be made quarterly, bi-annually, annually, or as a one-time payment."],
            ["question" => "What additional fees like ongoing maintenance or renewal fees are there besides the purchase price?", "answer" => "There are no additional fees for maintenance or renewal beyond the initial purchase of the vault."],
            ["question" => "Can I choose the location of the vault?", "answer" => "Yes, applicants may choose the location of their vault at the time of application, subject to availability. It is recommended to select a vault as early as possible to secure the desired location."],
            ["question" => "How many urns can be placed in one vault?", "answer" => "Each vault can hold up to four (4) urns containing human ashes. The names of the deceased must be etched or affixed on the urns for easy identification."],
            ["question" => "When can I visit the columbarium?", "answer" => "You can visit the columbarium between 9:00 AM and 7:00 PM daily. During these hours, visitors are welcome to pay their respects, reflect, and spend time in remembrance of their loved ones in a peaceful and serene environment."],
            ["question" => "Are there specific rules for ceremonies or gatherings at the columbarium?", "answer" => "Only Catholic liturgical services are permitted within the columbarium premises. Holy Mass is not allowed inside the RCMG, but blessings may be performed. Any special ceremonies must adhere to the rules and guidelines set by the parish."],
            ["question" => "Can I transfer ownership of a vault to someone else?", "answer" => "No. The 'Privilege to Use' a vault does not grant ownership rights, and it cannot be transferred to another person. The privilege is granted only to the applicant and designated beneficiaries, as stated in the agreement."],
            ["question" => "Are there restrictions on memorial plaques or decorations?", "answer" => "Yes. For uniformity, no additional memorials, statues, images, signs, or inscriptions are allowed inside the columbarium. The only permitted memorial is the vault's plaque (marble plate), which can be engraved at an additional cost."],
            ["question" => "Can the remains be relocated to another columbarium or cemetery later?", "answer" => "Yes, but only under specific conditions. The removal of ashes is allowed only for valid reasons and requires written consent from the Parish Priest. The process must comply with the RCAM's regulations and legal authorities before relocation can take place."],
            ["question" => "How can I update my contact information or make changes to my application?", "answer" => "Holders of the 'Privilege to Use' a vault are responsible for updating their contact information with the RCMG Committee. Any changes in address or personal details should be reported promptly to ensure proper communication."],
            ["question" => "What payment methods are accepted?", "answer" => "Cash and bank transfer are accepted. However, applicants are encouraged to check with the parish office for confirmation and to inquire about any additional payment options, such as checks or digital transfers."],
            ["question" => "Are there specific rules for flowers, candles, and personal items?", "answer" => "Yes. Only dripless and smokeless candles are allowed inside the RCMG. Only flower vases and candle holders provided by RCMG can be used inside the premises. Vases with water are not allowed to prevent mosquito breeding. Flowers and candles should not be left on the floor of the columbarium. Eating and bringing food inside the columbarium is strictly prohibited."],
            ["question" => "Who should I contact for further inquiries?", "answer" => "For additional information, applicants and vault holders should contact the Parish Office Manager at St. Alphonsus Mary de Liguori Parish."]
        ];
 
        return view('livewire.faqs', compact('faqs'))
            ->layout('faq_s'); // Use the correct layout path
    }
}
