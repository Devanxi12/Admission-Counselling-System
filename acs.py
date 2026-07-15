import random

def acs_chatbot():
    print("🎓 Welcome to Admission Counselling System (ACS) Chatbot")
    print("Type 'exit' to stop.\n")

    while True:
        user = input("You: ").lower()

        # Greetings
        if user in ["hi", "hello", "hey"]:
            print("Bot:", random.choice([
                "Hello! How can I help you with admission?",
                "Hi! Ask me about courses or fees.",
                "Welcome to ACS Chatbot!"
            ]))

        # Course Information
        elif "course" in user:
            print("Bot: We offer B.Tech, BCA, BBA, MBA and Diploma courses.")

        # Fees
        elif "fees" in user:
            print("Bot: Fees structure:\n"
                  "B.Tech: ₹1,00,000 per year\n"
                  "BCA: ₹60,000 per year\n"
                  "MBA: ₹1,20,000 per year")

        # Eligibility
        elif "eligibility" in user:
            print("Bot: You must have passed 12th with minimum 50% marks (45% for reserved category).")

        # Entrance Exam
        elif "exam" in user or "entrance" in user:
            print("Bot: Admission is based on GUJCET or JEE score.")

        # Last Date
        elif "last date" in user or "deadline" in user:
            print("Bot: The last date to apply is 30th June 2026.")

        # Contact
        elif "contact" in user:
            print("Bot: Contact us at 9876543210 or email: admission@college.com")

        # Exit
        elif "exit" in user:
            print("Bot: Thank you for visiting ACS. Best of luck for your admission!")
            break

        # Default
        else:
            print("Bot: Sorry, I didn’t understand. Please ask about courses, fees, eligibility, or exam.")

acs_chatbot()