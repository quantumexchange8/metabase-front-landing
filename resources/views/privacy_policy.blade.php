@extends('layouts.master')
@section('content')
<style>
    .pp1 {
        color: #00b276;
        font-family: SF Pro Text;
        font-size: 40px;
        width: 1000px;
        text-align: center;
    }
    .pp2 {
        /* margin-top: 50px;
        margin-bottom: 100px; */
        margin: 50px 40px 100px 40px;
        width: 100%;
    }
    .pp2 p {
        font-family: SF Pro Text;
        /* color: #ffffff; */
        line-height: 26px;
        font-size: 15px;
        width: 1000px;
    }
    .pp2 span {
        font-family: SF Pro Text;
        color: #00b276;
        line-height: 26px;
        font-size: 15px;
    }
    .dark-mode .header {
        color: #ffffff;
    }
    .header {
        color:#000000;
        font-size:20px
    }
    .pp2 a {
        text-decoration: none;
        cursor: pointer;
    }
    .pp2 a:hover {
        text-decoration: underline;
    }
    @media screen and (max-width: 1000px) {
        .pp2 {
            padding: 0 40px;
            box-sizing: border-box;
        }
        .pp2 p {
            width: 100%;
            height: auto;
        }
        .pp2 a {
            font-size: 30px;
        }
    }
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="main-content">
    <div class="pp1">
        <b>Privacy Policy</b>
    </div>

    <div class="pp2 mobile-ml-mr">
        <p>
            <b class="header">1. Our Commitment</b>
            <br>
            <br>
            Metabase Ltd (the "Firm", "our", "we", "us", "Metabase" or "Metabase Limited") is authorized and regulated by the
            Financial Services Commission Mauritius for the conduct of investment business.
            <br>
            <br>
            As part of our day-to-day business, we need to collect personal information from our customer and potential customer to ensure that we can meet their needs for a 
            range of financial services and provide them with information about our services. The Firm fully respects your right to privacy
            and is committed to protect the privacy of your personal and financial information. This policy confirms how the Firm manages the information provided by you or a third party in connection with its 
            provision of services to you, or which it collects from your use of its services via their website.
            <br>
            <br>
            If you have any questions about this policy or how the Firm collect and use personal information about you, please contact us using the contact details below.
            <br>
            <br>
            <b>Metabase Ltd</b>
            <br>
            <a>info@metabaseltd.com</a>
        </p>
        <br>
        <p>
            <b class="header">2. Data Protection Law</b>
            <br>
            <br>
            Data protection law says that the personal information the Firm holds about you must be:
            <br>
            <br>
            • Used lawfully, fairly and in a transparent way;<br>
            • Collected only for valid purposes that we have clearly explained to you and not used in anyway that is incompatible with those purpose;<br>
            • Relevant to the purposes we have told you about and limited only to those purposes;<br>
            • Accurate and kept up to date;<br>
            • Kept only as long as necessary for the purposes we have told you about;<br>
            • Kept securely.
        </p>
        <br>
        <p>
            <b class="header">3. Personal information we collect</b>
            <br>
            <br>
            If you are an actual or potential client, the Firm may collect the following types of information about you:
            <br>
            <br>
            • Name, address and contact details;<br>
            • Date of birth and gender;<br>
            • Information about your income and wealth;<br>
            • Profession and employment details;<br>
            • Location data;<br>
            • Trading performance;<br>
            • Any other similar information.<br>
            <br>
            <br>
            The Firm obtains this information in several ways through your use of its services or other dealings with it, 
            including through the Firm's website, account opening applications, the Firm's demo sign-upforms and in the course of ongoing customer service correspondence
            <br>
            <br>
            The Firm also keeps a record of your trading behaviour, including a record of:
            <br>
            <br>
            • Products you trade with it and their performance;<br>
            • Historical data about the trades and investments you have made, including the amount invested; and<br>
            • Your preference for certain types of products and services.<br>
            • Your frequency and duration of visits
            <br>
            <br>    
            The Firm may record any communications, electronic, by telephone, in person or otherwise, that it may have with you in relation to the services provided to you and the Firm's relationship with you. These recordings will be the sole property of the Firm and will constitute evidence of the communications between us. Such conversations may be recorded without the use of a warning tome or any other further notice.
        </p>
        <br>
        <p>
            <b class="header">4. How we collect and store information</b>
            <br>
            <br>
            The Firm's use of information is a function of what you provide and what is necessary to carry out some of its services for you. At all times, the Firm will only process an appropriate amount of your relevant information and in line with your rights.
            <br>
            <br>
            Information will be collected and held when you complete an online application or other type of form or access and trade on your account through the website or another service provided to you. Information may also be collected from third parties connected with you, such as employers, joint account holders, authorized representatives, or from such other sources in respect of which you have given your consent to disclose information relating to you and/or where not otherwise restricted.The information you give the Firm may include (but is not limited to) your name, address, date of birth, passport number, tax identification number, email address, telephone number, employment and income information, transaction history and financial statements.
            <br>
            <br>
            The Firm's website uses cookies which enable clients or visitors to the site ("users") to navigate around the website and, where approprate, to enable to Firm to tailor the content to fit the need of users. Cookies also provide the Firm with genetic statistics enabling it to improve the website and to provide you with information about products and services which may be of interest to you. This does not affect your right to opt-out from receiving marketing material.
            <br>
            <br>
            Most browsers are initially set-up to accept cookies, but you can change your cookie preferences if you wish. Your navigation of the client login area may also be less efficient if your browser is set to disable persistent cookies (i.e., those which remain permanently on the cookie file of your computer).
            <br>
            <br>
            Please visit <a href="http://www.allaboutcookies.org/manage-cookies/">http://www.allaboutcookies.org/manage-cookies/</a> for more information on how cookies work and how they may be managed.
            <br>
            <br>
            A pixel tag, also known as a web beacon, is an invisible tag placed on certain pages of our website but not on your computer. Pixel tags are usually used in conjunction with cookies and are used to monitor the behaviour of users visiting the website.
            <br>
            <br>
            We place and track advertisements on third-party websites. Like many advertisers, we advertise our products and services, and we contract with third parties to place advertisements, on websites not affiliated with us where we think the advertisements are likely to be most relevant. These advertisements may contain cookies or other mechanisms that allow tracking of your response to our ads. We and our contracted third parties track and report performance of our advertising and marketing campaigns by using cookies, web beacons, and other similar technology, which may be used to collect and store information about user visits, page visits and duration, and the specific ad or link that the user clicked on to visit the site. No personally identifiable information is stored during this process.
            <br>
            <br>
            The Firm obtains this information in several ways through your use of its services or other dealings with it, including through the Firm's website, account opening applications, the Firm's demo sign-upforms and in the course of ongoing customer service correspondence.
            <br>
            <br>
            You acknowledge and agree that your personal information may be transferred within or outside the Asia market. Please note, the Firm will only transfer personal information to organizations outside the Asia if it has assessed the organization as having appropriate controls and safeguards in place to protect your personal data.
        </p>
        <br>
        <p>
            <b class="header">5. Reasons for collecting personal information</b>
            <br>
            <br>
            The Firm collects certain personal information so that it may meet the needs of its clients. The Firm will use this information for the following purposes:
            <br>
            <br>
            <span>5.1 To verify your identity and establish and manage your account</span>
            <br>
            The Firm will need to verify your identity to set you up as a customer and it will need to use that information to effectively manage your account with the Firm to make sure that you are getting the best possible service.
            <br>
            <br>
            This could include third parties carrying our credit or identity checks on behalf of the Firm, for the specific purpose of anti-money laundering, credit assessment, identity verification and fraud prevention.
            <br>
            <br>
            The Firm has legal obligation to comply with certain "Know Your Customer" regulatory obligations and therefore it is in the Firm's legitimate interest to gather this information. As part of the "Know Your Client" on boarding process, for Asia based clients a Full Electoral Roll search occurs, and credit reference agencies place a "soft footprint" search on your electronic file.
            <br>
            <br>
            <span>5.2 To Provide you with products and services and to review your ongoing needs</span>
            <br>
            When you open an account with the Firm, it will use your personal information to perform its services and comply with its obligations to you. The Firm also has an obligation to make sure it is providing the best product and services to you and may therefore periodically review your needs to ensure the products and services you receive from the Firm are still the best for you.
            <br>
            <br>
            <span>5.3 To investigate or settle enquires or disputes</span>
            <br>
            The Firm may need to use personal information collected from you to investigate issues and/or settle disputes with you.
            <br>
            <br>
            <span>5.4 To comply with applicable law or regulatory authorities</span>
            <br>
            The Firm may need to use your personal information to comply with applicable law, court order or other judicial process, or the requirements of any applicable regulatory authority.
            <br>
            <br>
            <span>5.5 Data Analysis</span>
            <br>
            The Firm's web pages and emails may contain tags or other similar type of data analysis tools which allow it to track receipt of correspondence and to count the number of users that have visited their webpage or opened its correspondence. Where your personal information is not in an anonymized form, it is in the Firm's legitimate interest to continually evaluate that personal information to ensure that the products and services it provides are relevant to the market.
            <br>
            <br>
            <span>5.6 Marketing by us</span>
            <br>
            The Firm may use your personal information to send you marketing communications by email, phone, or other agreed forms to make sure you are always kept to date with its latest products and services.
            <br>
            <br>
            You may tell us if you do not wish to receive marketing material by emailing the Firm at info@metabaseltd.com. The Firm will process this information fairly and lawfully and will store this information in accordance with relevant data protection legislation.
            <br>
            <br>
            <span>5.7 Record Keeping</span>
            <br>
            The Firm may need to process your personal information for record keeping purposes. Such processing is required to comply with its legal obligations and may include any communications that it has with you in relation to the services provided to you and the Firm's relationship with you. The Firm will also keep records to ensure that you comply with your obligations under any contract you have entered into with it.
            <br>
            <br>
            <span>5.8 Corporate restructuring</span>
            <br>
            If the Firm undergoes a corporate restructure or part or all of its business is acquired by a third party, it may need to use your personal information in association with that restructure or acquisition. Such use may involve disclosing your details as part of a due diligence exercise. The Firm will only use your information in this way provided it complies with legal obligation it has to you.
            <br>
            <br>
            <span>5.9 Security</span>
            <br>
            To maintain a safe and secure working environment, should you enter the Firm's premises, the Firm may record your image on its CCTV for security reasons. The Firm may also take your details to keep a record of who has entered their premises on any given day; detect as well as protect us or any third parties against negligence, fraud, theft or any other illegal activities; to apply crime detection, prevention and prosecution.
            <br>
            <br>
            <span>5.10 Survey</span>
            <br>
            The Firm may need to process your personal info to conduct surveys as to your relationship with us or our current/future products and services.
        </p>
        <br>
        <p>
            <b class="header">6. Sharing your personal information with third parties</b>
            <br>
            <br>
            The Firm may be required to provide your personal information to the Financial Conduct Authority and other regulatory and government bodies from time to time in Asia and other countries.
            <br>
            <br>
            The Firm may also disclose your personal information to:<br>
            • Financial institutions and other similar organizations that it deals with in the course of its corporate activities, or those that are nominated by you;<br>
            • External service providers (which may be located overseas) that provide service to the Firm;<br>
            • Any organization at your request or any persons acting on your behalf, including your financial adviser, broker, solicitor or accountant;<br>
            • Any third parties where this is necessary to process a transaction or provide services which you have requested; or any authority to whom the Firm are requires to disclose such information by law.
        </p>
        <br>
        <p>
            <b class="header">7. Your Rights</b>
            <br>
            <br>
            Data protection law gives you a number of rights when it comes to personal information, we hold about you. These are listed below.
            <br>
            <br>
            <span>7.1 Clear, transparent, and easily understandable communication</span>
            <br>
            We must provide in a clear, transparent, and easily understandable way how we use your personal information and about your rights. This policy provides that information. The key rights are set out below.
            <br>
            <br>
            <span>7.2 Access to Personal Information</span>
            <br>
            You can ask the Firm if it is processing your personal information and obtain from it a copy of that personal information. We may charge a nominal fee to cover the cost of verifying the application and locating, retrieving, reviewing and copying any material requested.
            <br>
            <br>
            You can access all your personal and personally identifiable information that we maintain by logging in to your account and going to “My Profile”. This section of the site is password-protected to better safeguard your information. To protect the confidentiality of such Personal Data, you should not divulge your password to anyone. You are responsible for all uses of the Website and any service provided for you by any person using your customer ID and password. As a registered user, you can update your Personal Data at any time on the website.
            <br>
            <br>
            <span>7.3 Rectification of Personal Information</span>
            <br>
            If the personal information the Firm holds about you is inaccurate or imcomplete, you are entitled to have it rectified.
            <br>
            <br>
            <span>7.4 Removal Personal Information</span>
            <br>
            You can ask the Firm to delete or remove your personal information in certain circumstances, such as where the firm no longer needs it, or you withdraw your consent (where applicable), provided that the Firm has no legal obligation to retain that data.
            <br>
            <br>
            Such requests will be subject to any retention limits the Firm is required to comply with in accordance with applicable laws and regulations.
            <br>
            <br>
            <span>7.5 Transfer Data</span>
            <br>
            Under the General Data Protection Regulation (GDPR), you have the right, in certain circumstances, to obtain personal information you have provided the Firm with and to reuse it elsewhere or ask the Firm to transfer this to a third party of your choice.
            <br>
            <br>
            <span>7.6 Objection</span>
            <br>
            You can ask the Firm to stop processing your personal information, and it will do so, if the Firm is:<br>
            • Relying on its own or someone else's legitimate interests to process your personal<br>
            • Information, except if we can demonstrate compelling legal grounds for the processing; or<br>
            • Processing your personal information for direct marketing.
            <br>
            <br>
            Please note, this will not stop the Firm from storing your personal information.
            <br>
            <br>
            <span>7.7 Restriction</span>
            <br>
            You can request a restriction of the processing of your personal information. This enables you to ask the Firm to suspend the processing of personal information about you.
            <br>
            <br>
            <span>7.8 Withdrawal of consent</span>
            <br>
            In the limited circumstances that the Firm is relying on your consent to the collection, processing, and transfer of your personal information for a specific purpose, you have the right to withdraw your consent for that specific processing at any time.
            <br>
            <br>
            Once the Firm has received notification for the purposes you originally agreed to, unless the Firm has another legitimate interest in doing so.
            <br>
            <br>
            <span>7.9 Lodge a complaint</span>
            <br>
            If you think that the Firm is using your information in a way which breaches data protection law, please contact the Firm in the first instance using the contact details above. You also have the right to raise a complaint with you national data protection supervisory authority (if you are in Asia, this will be the Information Commissioner's Office).
        </p>
        <br>
        <p>
            <b class="header">8. Data Security</b>
            <br>
            <br>
            The Firm takes security very seriously and adopts industry and information security best practies to protect your personal information. Measures include strong authentication mechanisms and secure access to machines and date.
            <br>
            <br>
            The Firm has put in place appropriate internal security measures to prevent your personal information from being accidentally lost, used, or accessed in an unauthorized way, altered, or disclosed.
            <br>
            <br>
            In addition, the Firm limits access to your personal information to those employees, agents, contractors and other third parties who have a business need to know. It will only process your personal information on the Firm's instructions, and they are subject to a duty of confidentiality.
        </p>
        <br>
        <p>
            <b class="header">9. Your consent</b>
            <br>
            <br>
            By accessing this website, or other services the Firm provides to you, you consent to the Firm collecting, maintaining, using, and disclosing personal information about you and provided by you or by another person as described in this policy.
        </p>
        <br>
        <p>
            <b class="header">10. Amendments to Policy</b>
            <br>
            <br>
            From time to time, the Firm may make changes to this Privacy Policy for any reason and will notify you of such changes by posting an updated version of this policy on this website, or where appropriate, by email.
            <br>
            <br>
            You are responsible for regularly reviewing this Privacy Policy and if you use this website or other service the Firm provides to you after any changes are published, any such use shall constitute your agreement to those changes.
        </p>
    </div>
</div>
@endsection