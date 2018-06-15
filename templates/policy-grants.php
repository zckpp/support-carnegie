<div class="project-list"><h2>General Introduction</h2></div>
<div class="project-list-content">
    <a><h3>Introduction</h3></a>
    <a><h3>The Grant Cycle</h3></a>
    <a><h3>Glossary of Terms</h3></a>
    <a><h3>Roles and Responsibilities</h3></a>
</div>
<div class="project-list"><h2>Pre-Award Phase</h2></div>
<div class="project-list-content">
    <a><h3>Proposal Preparation</h3></a>
    <a><h3>Responsible Conduct of Research (RCR)</h3></a>
    <a><h3>Subaward Planning and monitoring</h3></a>
    <a><h3>Institutional Certification</h3></a>
    <a><h3>Proposal Input in NAV</h3></a>
</div>
<div class="project-list"><h2>Post-Award Phase</h2></div>
<div class="project-list-content">
    <a><h3>Funder & fund #/Award set up</h3></a>
    <a><h3>Expenditure monitoring/allowable cost</h3></a>
    <a><h3>Cost transfer</h3></a>
    <a><h3>Carryover</h3></a>
    <a><h3>Effort Reporting (including salary cap per UG)</h3></a>
    <a><h3>Procurement</h3></a>
    <a><h3>Cost Sharing</h3></a>
    <a><h3>Indirect Cost</h3></a>
    <a><h3>Reporting (financial & technical, invention, property etc.)</h3></a>
    <a><h3>Invoicing</h3></a>
    <a><h3>PI Eligibility</h3></a>
    <a><h3>Responsible Conduct of Research (RCR)</h3></a>
    <a><h3>Business and Travel Expense reporting</h3></a>
    <a><h3>Closeout</h3></a>
    <a><h3>Closeout checklist</h3></a>
    <a><h3>Award Review and Routing Process</h3></a>
    <a><h3>Receipt of Funds Process</h3></a>
    <a><h3>Agency prior approval Matrix</h3></a>
    <a><h3>Budget Templates</h3></a>
</div>
<script>
    (function ($) {
        // Variables Here
        lists                = {};
        lists.project = $(".project-list");
        function down (el) {
            el.next().slideDown();
            el.addClass('active');
        }

        function up (el) {
            el.next().slideUp();
            el.removeClass('active');
        }
        lists.project.click(function () {
            return (this.tog = !this.tog) ? down($(this)) : up($(this));
        });
    }(jQuery));
</script>