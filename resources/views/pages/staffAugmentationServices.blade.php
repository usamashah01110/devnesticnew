<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devnestic | IT Staff Augmentation</title>
    <link rel="stylesheet" href="{{asset('staff.css')}}">
    <link href="{{ asset('landingpage/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('landingpage/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <link href="{{ asset('landingpage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('landingpage/assets/css/main.css') }}" rel="stylesheet">
</head>

<body>
    @include('includes.navbar')

    <!-- IT Staff Augmentation Services Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1>IT Staff Augmentation Services</h1>
            <p class="hero-description">
                Finding innovation in your industry is hard enough, but finding and hiring the right people to drive
                it often feels impossible. From ideation to execution, we provide the right staff augmentation and
                dedicated teams to help with your digital transformation, accelerate your projects, stay competitive,
                and help you get what you want to meet your upcoming needs.
            </p>
        </div>
    </section>

    <!-- Doubts Call to Action Section -->
    <section class="cta-banner">
        <div class="container text-center">
            <h2>Don't let doubts stop you from reaping the benefits of team augmentation</h2>
            <p>We are a third-party service provider, so you don't have to worry about managing a third party.</p>
        </div>
    </section>

    <!-- Brands Empowered Section -->
    <section class="brands-section">
        <div class="container text-center">
            <h3>Brands Empowered by Team Augmentation Services</h3>
            <div class="brand-logos">
                <div class="brand-item">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOMAAACUCAMAAABWd24HAAAAeFBMVEUQEBCwBg/lCRMAERBfDRCvBxGrBhAAEBG4BBCtBg6iBxBHDxDoCRJhDQ8WERCbCA/cCRMiEBHwCRSSBA4JEBCFAw1WDQ/TCBQ9DxF+AQ2LAw01Dg9CDQ9zDREdDxCFDRHHBxBpDRDBCRNQDQ91AAz3BxMmDw8wEBGGeZGrAAADdUlEQVR4nO2cf2+qMBSGgUJLK1qkIFjn/Dn3/b/hLbgph2RLbm6WXU7e509JjE/OS09bilEEAAAAAAAAAAAAAAAAAAAAAAAAAPCX1ITf/jU/w5owulCvCPPVF2lbjtmrzytqY+wY9d3X/NeITVuMqMzrZ73U8hw/yXPxq7/zX1CbPBlRtIvPeqllHmcP4my+jmJpxo5JtR87jpixo0pNSxyz9UdY+TiKNJMVSevuo5CsHB0N64Gho5R5QUYdjo6xJY5Vd7fh5ejasWRlOTqabDzqFKUYRlZejtLSUScd7khejtoeSVjvOrwcYyvJqFOu+kIyczS2HEsmB4aO0p1JIc+9DzNHbSWZzpUXwc4xtpa0yMQxdJSehjUPK2VujtqZkoT1pPg5Wt8Wo0oWPjimuebkmMmGbnmcO8XNMXQPN26RRXJi6Gi3k8XHSm1iXo7aNBldKXdqIyUrxxDWZnxDJtVJBEfNy9FeaVhlfTHcHE1jyP5c8noxRrJy1MZdyXTubd+xc5T2QOdzx5sdSzJwDDekd7SQC2e5ORo3aZGmcbwcdQhrE9Mtj20opGbk2N+Qnj4VKKwfhZWJo/Nkfy45b53RmpOjNrahj7DKhplj6JAhm2TxUcrmeUPycOzDOmmRfSFZOQ5hJYNO6fwjrCwch7DSR1hJ3FjJyzGE9ToJq3+ElYljKOTV01HHel6OfVi3C9IiC91YZo7aNDf5RViZOIZC+l1K5nPJI6xMHEMdXafaSVh5OYaRNTg6cjig9e7eIdk4avuidqRDFtZJXo5xcFR0ZD03hlVW495R7On+3Pa+huTkKGpFHKsQVnaOkSJHkpJ2a3g5moWKxJIe9rxPdXg51u+0RWZesnOMIkfD2jB0VEvSIhNrGDp2k1MeLmPnGClP53N99+DmKE7k/FwpDT/H+kafChwtP8dIeNIh2zCdY+eoNpP9OcPPsVb0lMeRoWOkDiSspdT8HMWOzudyyc8xEpOwZtmM3/H8wpHO54okk/wca1HSsDLMaiQMfXlHz7eOKjhmvV0+8HRUu7dq4H52t4hnXMdlsBseyzWH/f6U3h6vyKvDoXFhWXU+lklVvbXzdVQvp3TRdbv32/p1+D+E5yWhVLRav++6xWWz3Lr5ZjX6/j8e+o+VEkLNt4oAAAAAAAAAAAAAAAAAAAAAAAAAAD/EH/JrQ1lW52z2AAAAAElFTkSuQmCC" alt="Netflix Logo">
                </div>
                <div class="brand-item">
                    <img src="data:image/png;base64,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" alt="Uber Logo">
                </div>
                <div class="brand-item">
                    <img src="data:image/png;base64,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" alt="IBM Logo">
                </div>
                <div class="brand-item">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJQAAACUCAMAAABC4vDmAAAAh1BMVEXz8/OBvAYFpvD/ugjzUyXz9vj39fj59v399/Py9v329fPzpZW51ZN6uQCax1D9xFAAo/CTyvL51JPzTRnz+/1PtPDzRwnzd1rzoZHzs6jE26PzQADzb1DzdFWj0vJFsfD9wkb42qQAn/DzzcfX5cWVxEXzkn2pznBwwPH7zXD/tADF4PT55cW1hLQrAAABG0lEQVR4nO3c6xKBUBSGYSRRKKdCqJDz/V+f0daM/fvrT+N9L2DNcwHfrE6H6H9y1cyZgZplOq0DqU2lGmzHWudflbtOY6V0t/yc8cqJ1thCBXFfaZEY1LQrBQoUKFCgQIECBQoUKFCgQIECBQoUKFCgQIECBQoUKFCgQIECBQpUW1HpQine16ugJlGbXaK0v1T7Ke9aTpXKrb3qWmp9l2aemGUiajx/KGbOjMRcy3TIVlK3SjW656FSXvyq/NkxUjquDCp8OEqPuY2KekpRjZJMjgMKFChQoECBAgUKFChQoECBAgUKFChQoECBAgUKFChQoECBAgUKVEtR4iooM6i80VXQc6Z18D9n3GKu9bJXXWrmTEM/AIn+ojdAGSY+h8N+0wAAAABJRU5ErkJggg==" alt="Microsoft Logo">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Augmentation vs Hiring Freelancers Section -->
    <section class="comparison-section">
        <div class="container">
            <h2 class="section-title text-center">Team Augmentation vs Hiring Freelancers: Make the Right Decision</h2>
            <p class="section-subtitle text-center">
                Staff augmentation involves integrating a dedicated, remote development team from a third-party service provider,
                while hiring freelancers is giving you a third-party contractor to work on a specific task.
            </p>

            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Criteria</th>
                            <th>IT Staff Augmentation</th>
                            <th>Hiring a Freelancer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Skills</td>
                            <td>A wide array of skills.</td>
                            <td>Generally focused on specific skills.</td>
                        </tr>
                        <tr>
                            <td>Recruitment time</td>
                            <td>Swift onboarding of pre-vetted developers.</td>
                            <td>Vetting as well as finding appropriate talent takes time.</td>
                        </tr>
                        <tr>
                            <td>Cost structure</td>
                            <td>Fixed project-based/hourly rates.</td>
                            <td>Rate varies depending upon the experience and the market.</td>
                        </tr>
                        <tr>
                            <td>Availability</td>
                            <td>Regular availability depends upon project complexity.</td>
                            <td>Availability may vary depending upon the freelancer's schedule.</td>
                        </tr>
                        <tr>
                            <td>Control</td>
                            <td>High control over the project.</td>
                            <td>Limited control.</td>
                        </tr>
                        <tr>
                            <td>Scalability</td>
                            <td>Based on project needs scale up and down.</td>
                            <td>Limited scalability.</td>
                        </tr>
                        <tr>
                            <td>Quality</td>
                            <td>Top-notch with consistent project delivery.</td>
                            <td>Dependent upon freelancer's expertise.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- The Teams You Can Augment Section -->
    <section class="augment-teams-section">
        <div class="container">
            <h2 class="section-title text-center">The Teams You Can Augment</h2>
            <div class="augment-grid">
                <div class="augment-item">
                    <h4>AI Experts</h4>
                    <p>We provide a wide range of AI services, helping to build efficient solutions with a user-centric mindset across various industries.</p>
                </div>
                <div class="augment-item">
                    <h4>Robotics Engineers</h4>
                    <p>NEXTBRIDGE offers experienced Robotics Engineers who can dedicatedly work on your projects and take them from scratch.</p>
                </div>
                <div class="augment-item">
                    <h4>Web Developers</h4>
                    <p>NEXTBRIDGE provides dedicated & experienced programmers & developers to help you scale.</p>
                </div>
                <div class="augment-item">
                    <h4>UI/UX Designers</h4>
                    <p>Because friendly interfaces & solutions designed by our user experience professionals boost profits.</p>
                </div>
                <div class="augment-item">
                    <h4>Mobile Developers</h4>
                    <p>Mobile Developers help to build your iOS or Android mobile app and deploy it on app stores.</p>
                </div>
                <div class="augment-item">
                    <h4>Quality Assurance Professionals</h4>
                    <p>NEXTBRIDGE provides certified Quality Assurance professionals dedicated to delivering the best quality.</p>
                </div>
                <div class="augment-item">
                    <h4>DevOps Engineers</h4>
                    <p>NEXTBRIDGE DevOps Engineers & develop robust infrastructure to future-proof your IT environment with our DevOps Engineers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Operational Efficiency Steps Section -->
    <section class="efficiency-steps-section">
        <div class="container">
            <h2 class="section-title text-center">Achieve High Operational Efficiency: Augment Your Team in Just 4 Steps</h2>

            <div class="steps-grid">
                <div class="step-item">
                    <div class="step-icon">
                        <img src="data:image/jpeg;base64,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" alt="Book a Consultation">
                    </div>
                    <div class="step-content">
                        <h4>Book a Free Consultation</h4>
                        <p>Get in touch with our experts to discuss your project requirements.</p>
                    </div>
                </div>

                <div class="step-item">
                    <div class="step-icon">
                        <img src="data:image/jpeg;base64,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" alt="Get CVs">
                    </div>
                    <div class="step-content">
                        <h4>Get CVs</h4>
                        <p>Our team will assess your needs & send you CVs of pre-vetted developers.</p>
                    </div>
                </div>

                <div class="step-item">
                    <div class="step-icon">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAuAMBEQACEQEDEQH/xAAbAAEAAQUBAAAAAAAAAAAAAAAABQIDBAYHAf/EADsQAAICAQIDBQQHBgcBAAAAAAABAgMEBREGEiETMUFRYSJxgbEHFDIzUpHRFjRCcrLBFSNzgpKh8Tb/xAAbAQEAAQUBAAAAAAAAAAAAAAAABAECAwUGB//EADIRAQACAQIEBAQFAwUAAAAAAAABAgMEEQUSMUETITJxImGBsRQzUZHwI6HRFTRCUsH/2gAMAwEAAhEDEQA/AO4gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADHzMunDx7MjKurpprW85zlsor1YmYiN5VrE2naI82Do/Eek63OcNLz6cidf24xfVLz2fgWVvW3RkyYcmON7xsli9iAAEZqmu6ZpM4Q1DNqpnNbxjJ9WvPYttetessWTPjxzteWbi5FWVTC7HthbVNbxnB7porE7+a+totG8dF4quAAAAAAAAAAAAAAAInXNewdGqjLMtfPP7FcFvKXw8vUttaK9UvSaHNqp2xx9eyHw+PdKvvVd0bsZSeynYt4/HbuLIzVmdk7LwLU0rvXa38+aN+mCx/snV2c94TyYb7dzWza/sWamfgQ9BH9aYn5tA+jScoca6coya5uZPbxXK+hHweuGx1n5M/R2TXtZenpU0bSyJLfr3RXmNZrPA2rX1OdyX5fKGtvWtR7TtFmWb+W3T8jU/jNRvvzMHiXbJoOs/X1Km9KN8evT+JG30Ws8b4bdWbHfm8p6uW/SBOcuLc7mk3y8sUvJcpfk9UtBxCd9RLd/ousa4bs55+zC+e2/cl0M2Dzrs2fDrR4G8/NI5XGGnUWuFcbbtujnBez8N+82uPh2a8bz5I+XjenpbaN59uiT0nV8TVIN4tm8o/ahLpJfAjZtPkwzteE7S63Dqo/pz/AJSK7jClvQAAAAAAAAAAB5LuBLjfFuTbk8SZ7ub/AMu11wi/4Yru/X4kS872d5wvHXHpKcveN/3Q78fEsT01xLkWZP0Z4faty7LN7OLfjFb7foXZJ3xOX1WOtOI25e8boL6N/wD7TTd+ntS/pZiw/mQxaz8i30dG4kU1rF7n4qPL7tv/AE1uv3/EW3+jl8vrRZDY0nw0pvWaeTfZKTl7tiZw/f8AERsyY/U0vj5r9rc/r/FH+lG2v6paTX/7iU5w5dZT9H+X2e658vkbXgum5s+E0i2XaTLktTh08veUbudQ5xJ8M32Ua5iOpv258kkvGL7/ANfgRdbWtsFt+yfwzLbHqqcvedv3dRXcjm3cvQAAAAAAAAAAB5LuA0rjHhK3UcmWfprh28klZVLpz7eKfnsYr4+bzhvuF8Wrp6eFm6dp/RreJwXrN1yjfXDFrT62WST2XnsjFGK2/m2+XjWkpG9Z5p/RR9IORhw0XG0LS5drXiPnsnF77yW/T39W2UzbcvLCDptNnzRk1WaNpnpDVuBu0hxHRkwW6xk7H8l8yBly+FXm77oHEsnJg99naMzDxtfxIXY9qhdFbJvw9JIkZcePW0i9Z82itWLxvCGfDeo8/KoVbfi5+n6kGOG599mPwrJjDxMbQMWy7IsU7pLv7t/RInYsWPRUm9p82WtYxxvLk3FjnZrd2TZ0eRtP+2xiwZvFpzS57W7+PMtq4HuxZaRdpGoSUI5Ldlc29tm/79zOlxabLhw0zV6sej1GLJF9LlnaJ6T81zK4U1Sq1xprhfX4ThLbf12Zs6cRw2je07Si5ODaqttqxEx+qe4Y4angXrMznF2pf5dcevL67kDW62MsclOja8M4XbBfxcvXtDa13Gtb56AAAAAAAAAAGBCcR8RY2h46dydl8/u6Y979X5ItveKp2h0GTV2+HyrHWf53c61Hi3Wc+UmsqWNW/wCDHfLt/u7yNOS0y6vT8J0mGI+Hef1nz/t0RNuZmWpq7Ny7E+9WZE5J/BspNplOrhxVnetIj2iI+z3BwcnUMhY+HQ7pvwiui977kUisz0W5s+PBXnyztDa6OD7OHsTnrSvdvW6UV9l+XuRr9dp8lfijzh59xHP+Iy81PT2eU3W48uaiydcvxQk1ua+t7UnestbG8M3/ABvU+Xb63L38sd/kZ/xuo/7fZfz2YV11l8ue+ydkvxTbZHve153tO8rZmZXf2Ut1uhWWx7JV9a5TX235e7z+BtuFYrRli+SPh7/Ng1GjtqMcxXynshs3EvwbXTlUyqmn3bdH7vBnoWLJTJXekuRz4MmG3LkjzK8vKpSVWVfBLuUbZJfMrbFjt1rCldRlrHw3mPqkcDiXVMWa3yHfHxhd7W/x7yNl0ODJHTb2TdPxXVYp87c0fNu+h65Rq9DdXsWw6TrfevX1RpdRprYLbT0dRotfj1dN6+U94/nZLkdOAAAAAAAAAFMmkm33JdQQ4nreo2arquRlzlvGU2q1v3QT9lfkQ7TvZ6Do9PGnwVxx9ffu2PhXg6GpYsM7UZ2RpsW9dUHs5LzbMmPFExvLU8R4zODJOLD1jrPzbVTwZoFTTjgczX47rJL8nIzclWmtxjXWjab/ALREf+JnEw8bDqVeLRVTD8NcUkViIjog5MuTLPNeZmfmvuKa2aT3Ksbmt/S+xLuU5fM5G/rn3n7oU9VBRRXSk7q0+qc47/mXU9Ue8EdXSkkl0SOs2TlnKxaMmvkyKa7Y+U4pl9L2pO9Z2Y8mLHlja9d4RdnC+jTk28JLf8Nko/8ASZIjXaiP+SDbhGjmd+T+8td4i4Xhg48srAc5VQ+8rl1cV5pmw0mvnLbkydZ7tPxHhMYaTkwz5R1ifug9IzZ6dqNORGXSMkprzj4r8idqMUZsc0lq9JqJ0+eLx9fZ1hPc5d3z0AAAAAAAABYzv3LI/wBKXyKW6MmL8yvvDhC+7X8pCekT6ncNDio6NgRitorGrSXpyomV6Q861U76i8/Ofuzi5gAAHNL/AN4t/wBSXzOSv6595+6FPVQWqK8f94q/nj8y6nqj3gjq6WdanAADD1eKnpeZF9zx5p/8WZcH5tfeEfVRvgvHyn7OSP7vqdV3ee7eTsGJ1xqf5I/I5K/rl6Ni/Lr7L5ayAAAAAAAAFrKg7ca2Edt5Qklv6opPRdS0VtEy4dLCyo5f1B0TWVvy9nt1fr7vUh8s7vRfHxzTxon4eu7tum1So0/Gps+3XVCEtvNJImRG0PPc9ovltaO8yySrEAGBpd/DmoyvslGNTjKTafP6mgvw/PNpmNu6NOK0qP2b1L8Ff/NFv+nZ/wBI/dTwbK6OHNQjfXKaqUVJNvn8mXU4fmi0TO37qxitDdDfpIAAx8+uV2HkVQW8p1Sive0y/HaK3iZ7MWas2xWrHeJcnWHkSyPqapl9Y35eTbqdR4tIrz7+TgY0+Wb+FEfE63jwcKa4PbeMUnt6I5W072mXoNK8tYhdKLgAAAAAAAABR2a332W/nsBUlswpstZdtlNMp04875rurhJJy+LaQVR+n62srGsycjFnhUReysvshtJptNdG/LxAzLs/FpqhZdk0wrs+xOU0lL3MDyzPw63WrMqmLsScFKxLmT8V5lNhas1XEgsecbI2VXXKnta5KUYye+279Wkve0VDL1TGxsbIt5+0dE1XKut7y53ttH3vdfmBkxy6JXvHVtbvit3XzJyS9wGNbq+LCVEa7I3dtdGldlJS5W02t/ToBmY99eRWrKZwnB77Sg90/ACtrcCns1vv4+YU2VhUAAAAAAAAAAAADxga5kaHky0/EqhbDtcfInbtzOMZqTl038O8CizQciumjsI41ko0WVTrvcpRi5vfmi/MA+HJyw3TZ2E5/wCHV4sW47qMo77v3dwGXPRIzr1GpdnCvJjW6+zW3JOK6S/NJ/ADEwOHLaM3EybslTSXa5cdvvb024z+HM/yj5AXsbRsirUK5ylQqasid6tin2tnNv7L9Fv/ANICxPhlz0HT9OjZGiVNinfZV7Ll7Mk9n57yAndKptx8Cii+NSsqgoPsVtB7dOi8PcBlgAAAAAAAAAAAAAAAAABsgAAAAAbAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//Z" alt="Choose Your Team">
                    </div>
                    <div class="step-content">
                        <h4>Choose Your Team</h4>
                        <p>You can select from the CVs, then interview & test the candidates.</p>
                    </div>
                </div>

                <div class="step-item">
                    <div class="step-icon">
                        <img src="data:image/jpeg;base64,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" alt="Onboard Your Team">
                    </div>
                    <div class="step-content">
                        <h4>Onboard Your Team</h4>
                        <p>Once you are done our team will onboard the team in just 48 hours.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Centralized Teams Section -->
    <section class="centralized-teams-section">
        <div class="container">
            <div class="centralized-content">
                <div class="centralized-text">
                    <h3>Centralized Teams</h3>
                    <p>Share your project requirements, and our experts will suggest the best fit for your team.</p>
                </div>
                <div class="centralized-image">
                    <img src="https://img.freepik.com/free-vector/flat-design-coworking-illustration_23-2150298090.jpg?semt=ais_hybrid&w=740&q=80" alt="Centralized Teams Illustration">
                </div>
            </div>
        </div>
    </section>

    <!-- Partnerships & Recognition Section -->
    <section class="partnerships-section">
        <div class="container">
            <h3>Partnerships & Recognition</h3>
            <p>Commitment to excellence</p>
            <div class="partnership-logos">
                <div class="partnership-item">
                    <img src="https://www.logo.wine/a/logo/Microsoft_Teams/Microsoft_Teams-Logo.wine.svg" alt="Microsoft Partner">
                </div>
                <div class="partnership-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGJ9iwlExI5xyD7yvE-Yl3OG0p54JO4W05yg&s" alt="LCCI Global Member">
                </div>
                <div class="partnership-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxY4sdIxiMRbMS64qhLde5b_RwEm3CfcYcgQ&s" alt="ISO 27001 Certified">
                </div>
                <div class="partnership-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3ULceUihXvHE-n18p_z8IuKLvZPGHszzkvQ&s" alt="ISO 9001 Certified">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    @include('includes.footer')

</body>

</html>