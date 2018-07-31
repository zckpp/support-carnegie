<div class="project-list"><h2>Overview</h2></div>
<div class="project-list-content">
    <h3>Policy & Guidelines Introduction</h3>
    <p>P101, March 29, 2018</p>
    <h3>PEstablishing and Revising Policies</h3>
    <p>P102; March 2018</p>
    <h3>Reporting violations (and Whistleblower)</h3>
    <p>P103, March 2018</p>
    <h3>Code of Conduct</h3>
    <p>P104, March 2018</p>
</div>
<div class="project-list"><h2>Human Resources</h2></div>
<div class="project-list-content">
    <h3>HR Policies</h3>
    <h3>Time Off</h3>
    <h3>Compensation</h3>
</div>
<div class="project-list"><h2>IT</h2></div>
<div class="project-list-content">
    <br>
</div>
<div class="project-list"><h2>Legal</h2></div>
<div class="project-list-content">
    <br>
</div>
<div class="project-list"><h2>Communications</h2></div>
<div class="project-list-content">
    <br>
</div>
<div class="project-list"><h2>Development</h2></div>
<div class="project-list-content">
    <br>
</div>
<div class="project-list"><h2>Operations</h2></div>
<div class="project-list-content">
    <br>
</div>
<div class="project-list"><h2>Grants</h2></div>
<div class="project-list-content">
    <br>
</div>
<div class="project-list"><h2>Finance</h2></div>
<div class="project-list-content">
    <br>
</div>
<div class="project-list"><h2>All</h2></div>
<div class="project-list-content">
    <br>
</div>
<div class="project-list"><h2>Code of Conduct</h2></div>
<div class="project-list-content">
    <br>
</div>

<!--<div class="project-list"><h2>Compensation</h2></div>-->
<!--<div class="project-list-content">-->
<!--    <h3>Attendance Schedule</h3>-->
<!--    <p>P301, March 29, 2018</p>-->
<!--    <h3>Performance Planning and Feedback</h3>-->
<!--    <p>P302, March 29, 2018</p>-->
<!--</div>-->
<!---->
<!--<div class="project-list"><h2>Time Off</h2></div>-->
<!--<div class="project-list-content">-->
<!--    <h3>Medical Leave</h3>-->
<!--    <p>Policy 501, March 29, 2018</p>-->
<!--</div>-->
<!--<div class="project-list"><h2>Workplace Policies</h2></div>-->
<!--<div class="project-list-content">-->
<!--    <h3>Policy on Harassment and Discrimination</h3>-->
<!--    <h3>Conflict of Commitment; All Staff</h3>-->
<!--    <p>P602, March 29, 2018</p>-->
<!--    <h3>Confidential Information</h3>-->
<!--    <p>P603, March 29, 2018</p>-->
<!--    <h3>Substance Abuse</h3>-->
<!--    <p>P604, March 29, 2018</p>-->
<!--    <h3>Workplace Violence</h3>-->
<!--    <p>P605, March 29, 2018</p>-->
<!--</div>-->
<!--<div class="project-list"><h2>Employee Concerns</h2></div>-->
<!--<div class="project-list-content">-->
<!--    <h3>Corrective Action</h3>-->
<!--    <p>P701, March 29, 2018</p>-->
<!--    <h3>Grievance Procedures</h3>-->
<!--    <p>P702, March 29, 2018</p>-->
<!--    <h3>Nursing Mothers</h3>-->
<!--</div>-->
<!--<div class="project-list"><h2>Miscellaneous</h2></div>-->
<!--<div class="project-list-content">-->
<!--    <h3>Social Media</h3>-->
<!--    <p>P802, March 29, 2018</p>-->
<!--    <h3>Media Relations</h3>-->
<!--    <p>P803, March 29, 2018</p>-->
<!--    <h3>IT and Electronics Policy (Draft)</h3>-->
<!--    <p>P803, March 29, 2018</p>-->
<!--    <h3>Political Campaigning Statement</h3>-->
<!--    <p>P804, March 2018</p>-->
<!--    <h3>Supplier Gifts, Hospitality and Entertainment</h3>-->
<!--    <p>P805, March 2018</p>-->
<!--    <h3>Gift Acceptance (Charitable)</h3>-->
<!--    <p>P806, March 2018</p>-->
<!--    <h3>Contract Review Process</h3>-->
<!--    <p>P807, March 2018</p>-->
<!--    <h3>Providing References and Letters of Recommendation</h3>-->
<!--    <p>P808, March 29, 2018</p>-->
<!--    <h3>Financial</h3>-->
<!--    <h3>Intellectual Property</h3>-->
<!--    <h3>Authorization Matrix</h3>-->
<!--    <h3>Record Retention Policy</h3>-->
<!--    <h3>IRS Accountable Plan for Expense Reimbursement</h3>-->
<!--</div>-->
<!--<div class="project-list"><h2>Researcher Handbook</h2></div>-->
<!--<div class="project-list-content">-->
<!--    <h3>Conflict of Interest/Research (faculty handbook)</h3>-->
<!--    <h3>Research Policies (faculty handbook)</h3>-->
<!--</div>-->
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