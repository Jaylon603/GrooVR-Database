# GrooVR-Database
 building a database that will index the entire content of the platform, including its users, different types of VR content, etc.
set of requirements:

Users of the database can be developers and players. All users must be either developers or players, or both.
Developers work on development teams for some VR experiences.
Developers can work on multiple VR experiences. A VR experience can be developed by several teams at the same time. Further, the same developer can participate in multiple teams working on the same VR experience.
A user is uniquely identified by their first name, last name, and date of birth. Users have an e-mail address and a physical address, which is composed by streetAddr, city, state, country, and ZIP. The user's age is modeled in the database but can be computed from the date of birth.
A developer has the date on which they started their career and can know several programming languages. A player has a headset and a favorite genre. The developer experience in years is modeled and computed from the career start date.
A user can have avatars (virtual representations of themselves), which are identified by name and described by height, gender, and species. Avatars of different users may have the same name.
Each VR Experience, identified by ExpID, has a name, can support one or more VR headsets, and has a type.
A VR Experience has a maintainer, who is also a developer.
A Development team is identified by teamID and contains a type and description.
