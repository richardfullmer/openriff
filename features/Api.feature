Feature:

  Scenario: json encoded content
    Given I add the "Content-Type" header equal to "application/json"
    When I send a POST request on "/tracks.json" with body:
      """
      {
          "id": 47
      }
      """
    Then print last response
    Then the response status code should be 200
    And the response should be equal to:
      """
      47
      """
